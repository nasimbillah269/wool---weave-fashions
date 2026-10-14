<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

// Corporate pages of the Wool & Weave website. Content lives in config/wool.php.
class WoolController extends Controller
{
    public function show(Request $r, $page)
    {
        $data = config('wool.pages.'.$page);
        if (!$data) {
            abort(404);
        }

        $posts = collect();
        if ($page === 'media') {
            $posts = Post::where('type', 1)
                ->where('status', 'active')
                ->whereDate('created_at', '<=', Carbon::now())
                ->latest()
                ->paginate(9, ['id', 'name', 'slug', 'short_description', 'created_at']);
        }

        return view(welcomeTheme().'wool.page', compact('page', 'data', 'posts'));
    }

    public function enquiry(Request $r)
    {
        // Simple honeypot: real visitors never fill this hidden field
        if ($r->filled('website')) {
            return back();
        }

        $types = config('wool.enquiry_types');
        $r->validate([
            'type'    => 'required|in:'.implode(',', array_keys($types)),
            'name'    => 'required|max:100',
            'company' => 'nullable|max:150',
            'email'   => 'required|email|max:150',
            'phone'   => 'nullable|max:40',
            'country' => 'nullable|max:80',
            'message' => 'required|max:3000',
            'brief'   => 'nullable|file|max:10240|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,jpg,jpeg,png,zip',
        ]);

        $attachments = null;
        $briefPath = null;
        if ($file = $r->file('brief')) {
            $briefPath = $file->store('enquiries');
            $attachments = [[
                'path' => storage_path('app/'.$briefPath),
                'name' => $file->getClientOriginalName(),
                'mime' => $file->getMimeType(),
            ]];
        }

        $enquiry = $r->only(['name', 'company', 'email', 'phone', 'country', 'message']) + [
            'type'  => $types[$r->type],
            'brief' => $briefPath,
        ];

        // Kept in the log as well, so no enquiry is lost if mail is not configured
        Log::info('Website enquiry', $enquiry);

        if (general()->mail_status && general()->mail_from_address) {
            sendMail(
                general()->mail_from_address,
                general()->mail_from_name,
                'Website enquiry: '.$enquiry['type'].' — '.$enquiry['name'],
                ['enquiry' => $enquiry],
                'mails.woolEnquiry',
                $attachments
            );
        }

        return redirect()->route('wool.page', ['page' => 'contact'])
            ->with('ww_success', 'Thank you. Your enquiry has been received and our team will get back to you soon.');
    }
}
