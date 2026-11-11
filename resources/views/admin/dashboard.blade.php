@extends(adminTheme().'layouts.app') @section('title')
<title>{{websiteTitle('Dashboard')}}</title>
@endsection @section('contents')
@php
    $per = json_decode(optional(Auth::user()->permission)->permission ?? '[]', true) ?: [];
    $hour = (int) now()->format('G');
    $greeting = $hour < 12 ? 'Good morning' : ($hour < 17 ? 'Good afternoon' : 'Good evening');
@endphp
<div class="content-body">

    <!-- Welcome banner -->
    <div class="yg-welcome">
        <div>
            <span class="yg-date"><i class="fa-regular fa-calendar"></i> {{ now()->format('l, d F Y') }}</span>
            <h2>{{ $greeting }}, {{ Str::limit(Auth::user()->name, 24) }} 👋</h2>
            <p>Here's an overview of your website content. Keep your products, pages and blog posts up to date.</p>
        </div>
        <div class="yg-welcome-actions">
            <a href="{{ route('index') }}" target="_blank" class="btn btn-ghost"><i class="fa-solid fa-globe mr-50"></i> View Website</a>
            <a href="{{ route('admin.productsAction','create') }}" class="btn btn-light"><i class="fa-solid fa-plus mr-50"></i> New Product</a>
        </div>
    </div>

    <!-- Totals -->
    <div class="yg-stats yg-stats-3">
        <a href="{{ route('admin.products') }}" class="yg-stat">
            <span class="yg-stat-icon c2"><i class="fas fa-box-open"></i></span>
            <div><h3>{{ $totals['products'] }}</h3><p>Total Products</p></div>
        </a>
        <a href="{{ route('admin.products') }}" class="yg-stat">
            <span class="yg-stat-icon c3"><i class="fas fa-check-circle"></i></span>
            <div><h3>{{ $totals['activeProducts'] }}</h3><p>Active Products</p></div>
        </a>
        <a href="{{ route('admin.posts') }}" class="yg-stat">
            <span class="yg-stat-icon"><i class="fas fa-file-alt"></i></span>
            <div><h3>{{ $totals['posts'] }}</h3><p>Blog Posts</p><small><i class="fa fa-arrow-up"></i> {{ $reports['posts'] }} this month</small></div>
        </a>
        <a href="{{ route('admin.pages') }}" class="yg-stat">
            <span class="yg-stat-icon c4"><i class="fas fa-copy"></i></span>
            <div><h3>{{ $totals['pages'] }}</h3><p>Pages</p></div>
        </a>
        <a href="{{ route('admin.sliders') }}" class="yg-stat">
            <span class="yg-stat-icon c6"><i class="fas fa-chalkboard"></i></span>
            <div><h3>{{ $totals['sliders'] }}</h3><p>Hero Slides</p></div>
        </a>
        <a href="{{ route('admin.usersCustomer') }}" class="yg-stat">
            <span class="yg-stat-icon c5"><i class="fas fa-users"></i></span>
            <div><h3>{{ $totals['users'] }}</h3><p>Customers</p></div>
        </a>
    </div>

    <!-- Recent products (full row) -->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Recent Products <a href="{{ route('admin.products') }}" class="yg-card-link">View all <i class="fa fa-chevron-right"></i></a></h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="min-width: 260px;">Product</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th style="width: 90px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentProducts as $item)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset($item->image()) }}" style="width: 42px; height: 42px; object-fit: cover;" class="mr-1" alt="{{ $item->name }}">
                                        <a href="{{ route('admin.productsAction',['edit',$item->id]) }}">{{ Str::limit($item->name ?: 'Untitled', 60) }}</a>
                                    </div>
                                </td>
                                <td><span class="badge {{ $item->status=='active' ? 'badge-success' : 'badge-danger' }}">{{ ucfirst($item->status) }}</span></td>
                                <td>{{ $item->created_at->format('d M Y') }}</td>
                                <td><a href="{{ route('admin.productsAction',['edit',$item->id]) }}" class="btn btn-sm btn-info">Edit</a></td>
                            </tr>
                            @empty
                            <tr><td colspan="4" class="text-center text-muted py-2">No products yet</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest blog posts -->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Latest Blog Posts <a href="{{ route('admin.posts') }}" class="yg-card-link">View all <i class="fa fa-chevron-right"></i></a></h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="min-width: 260px;">Title</th>
                                <th>Status</th>
                                <th>Published</th>
                                <th style="width: 90px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($posts->take(5) as $post)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset($post->image()) }}" style="width: 42px; height: 42px;" class="mr-1" alt="">
                                        <a href="{{ route('admin.postsAction',['edit',$post->id]) }}">{{ Str::limit($post->name ?: 'Untitled', 60) }}</a>
                                    </div>
                                </td>
                                <td><span class="badge {{ $post->status=='active' ? 'badge-success' : 'badge-danger' }}">{{ ucfirst($post->status) }}</span></td>
                                <td>{{ $post->created_at->format('d M Y') }}</td>
                                <td><a href="{{ route('admin.postsAction',['edit',$post->id]) }}" class="btn btn-sm btn-info">Edit</a></td>
                            </tr>
                            @empty
                            <tr><td colspan="4" class="text-center text-muted py-2">No blog posts yet</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
