@php $e = $datas['enquiry']; @endphp
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Website enquiry</title>
</head>
<body style="margin:0;padding:24px;background:#f7f3ec;font-family:Arial,sans-serif;color:#18201c">
    <table style="max-width:620px;width:100%;margin:0 auto;background:#fff;border-collapse:collapse">
        <tr><td colspan="2" style="padding:20px 24px;background:#0d241c;color:#e2c78f;font-size:18px;letter-spacing:1px">WOOL &amp; WEAVE — {{ $e['type'] }}</td></tr>
        @foreach(['name' => 'Name', 'company' => 'Company', 'email' => 'Email', 'phone' => 'Phone', 'country' => 'Country'] as $key => $label)
        @if(!empty($e[$key]))
        <tr>
            <td style="padding:10px 24px;border-bottom:1px solid #eee;width:130px;color:#68716c;font-size:14px">{{ $label }}</td>
            <td style="padding:10px 24px;border-bottom:1px solid #eee;font-size:14px">{{ $e[$key] }}</td>
        </tr>
        @endif
        @endforeach
        <tr>
            <td style="padding:10px 24px;color:#68716c;font-size:14px;vertical-align:top">Message</td>
            <td style="padding:10px 24px;font-size:14px;line-height:1.6">{!! nl2br(e($e['message'])) !!}</td>
        </tr>
        @if(!empty($e['brief']))
        <tr><td colspan="2" style="padding:10px 24px;font-size:13px;color:#68716c">A product brief is attached (stored at storage/app/{{ $e['brief'] }}).</td></tr>
        @endif
    </table>
</body>
</html>
