@extends(adminTheme().'layouts.app') @section('title')
<title>{{websiteTitle('Product Edit')}}</title>
@endsection @push('css')

<style type="text/css">
    .catagorydiv {
        max-height: 300px;
        overflow: auto;
    }
    .catagorydiv ul {
        padding-left: 20px;
    }
    .catagorydiv ul li {
        list-style: none;
    }
</style>
@endpush @section('contents')

<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Product Edit</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard </a></li>
                    <li class="breadcrumb-item active">Product Edit</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
        <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <a class="btn btn-outline-primary" href="{{route('admin.products')}}">BACK</a>
            @isset(json_decode(Auth::user()->permission->permission, true)['services']['add'])
			       	<a class="btn btn-outline-primary" href="{{route('admin.productsAction','create')}}">Add Product</a>
			      @endisset
            <a class="btn btn-outline-primary reloadPage" href="javascript:void(0)">
                <i class="fa-solid fa-rotate"></i>
            </a>
        </div>
    </div>
</div>

<div class="content-body">
    <!-- Basic Elements start -->
    <section class="basic-elements">
        @include('admin.alerts')
        <form action="{{route('admin.productsAction',['update',$product->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" style="border-bottom: 1px solid #e3ebf3;">
                            <h4 class="card-title">Product Edit</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Product Name </label>
                                    <input type="text" class="form-control {{$errors->has('name')?'error':''}}" name="name" placeholder="e.g. Light Indigo Skinny Jean" value="{{$product->name?:old('name')}}" required="" />
                                    @if ($errors->has('name'))
                                    <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="short_description">Subtitle <small class="text-muted">(shown under the product name, e.g. DNM001 | Women's | Sustainable Stretch Denim Concept)</small></label>
                                    <textarea name="short_description" rows="2" class="form-control {{$errors->has('short_description')?'error':''}}">{{ old('short_description', $product->short_description) }}</textarea>
                                    @if ($errors->has('short_description'))
                                    <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('short_description') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" style="border-bottom: 1px solid #e3ebf3;">
                            <h4 class="card-title">Product Specifications</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                @php
                                    $specRows = old('spec_label')
                                        ? collect(old('spec_label'))->map(fn($l, $i) => ['label' => $l, 'value' => old('spec_value')[$i] ?? ''])
                                        : ($product->specRows()->count() ? $product->specRows() : collect(\App\Models\Post::DEFAULT_SPEC_LABELS)->map(fn($l) => ['label' => $l, 'value' => '']));
                                @endphp
                                <p class="text-muted" style="font-size: 12px;">Name and value of each row. Empty rows are not shown on the website.</p>
                                <div id="specRows">
                                    @foreach($specRows as $row)
                                    <div class="form-row specRow mb-1">
                                        <div class="col-md-4"><input type="text" class="form-control" name="spec_label[]" value="{{ $row['label'] }}" placeholder="e.g. Composition" /></div>
                                        <div class="col-md-7"><input type="text" class="form-control" name="spec_value[]" value="{{ $row['value'] }}" placeholder="e.g. 100% Organic Cotton" /></div>
                                        <div class="col-md-1"><button type="button" class="btn btn-outline-danger btn-block specRemove" title="Remove row"><i class="fa fa-trash"></i></button></div>
                                    </div>
                                    @endforeach
                                </div>
                                @if ($errors->has('spec_label.*') || $errors->has('spec_value.*'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('spec_label.*') ?: $errors->first('spec_value.*') }}</p>
                                @endif
                                <button type="button" class="btn btn-sm btn-outline-primary mt-1 mb-2" id="specAdd"><i class="fa fa-plus"></i> Add Row</button>

                                <div class="form-group">
                                    <label for="benefits_title">Benefits Heading</label>
                                    <input type="text" id="benefits_title" class="form-control" name="benefits_title" value="{{ old('benefits_title', $product->specs['benefits_title'] ?? 'Key Buyer Benefits') }}" />
                                </div>
                                <div class="form-group">
                                    <label for="benefits">Benefits / Key Features <small class="text-muted">(one per line)</small></label>
                                    <textarea name="benefits" id="benefits" rows="5" class="form-control {{$errors->has('benefits')?'error':''}}">{{ old('benefits', implode("\n", $product->specs['benefits'] ?? [])) }}</textarea>
                                    @if ($errors->has('benefits'))
                                    <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('benefits') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="description">Additional Details <small class="text-muted">(optional, shown below the benefits)</small></label>
                                    <textarea name="description" class="{{$errors->has('description')?'error':''}} summernote">{!! old('description', $product->description) !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" style="border-bottom: 1px solid #e3ebf3;">
                            <h4 class="card-title">Gallery Images <small class="text-muted">(back view, details)</small></h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="file" name="gallery_image[]" multiple class="form-control {{$errors->has('gallery_image.*')?'error':''}}" />
                                    @if ($errors->has('gallery_image.*'))
                                    <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('gallery_image.*') }}</p>
                                    @endif
                                </div>
                                @if($product->galleryFiles->count())
                                <div class="d-flex flex-wrap" style="gap: 14px;">
                                    @foreach($product->galleryFiles as $media)
                                    <div>
                                        <img src="{{asset($media->file_url)}}" style="width: 100px; height: 100px; object-fit: contain; border: 1px solid #e3ebf3;" />
                                        @isset(json_decode(Auth::user()->permission->permission, true)['services']['add'])
                                        <a href="{{route('admin.mediesDelete',$media->id)}}" class="mediaDelete" style="color: red;"><i class="fa fa-trash"></i></a>
                                        @endisset
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" style="border-bottom: 1px solid #e3ebf3;">
                            <h4 class="card-title">SEO</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="seo_title">SEO Meta Title</label>
                                    <input type="text" class="form-control {{$errors->has('seo_title')?'error':''}}" name="seo_title" value="{{ old('seo_title', $product->seo_title) }}" />
                                    @if ($errors->has('seo_title'))
                                    <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('seo_title') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="seo_description">SEO Meta Description</label>
                                    <textarea name="seo_description" rows="2" class="form-control {{$errors->has('seo_description')?'error':''}}">{{ old('seo_description', $product->seo_description) }}</textarea>
                                    @if ($errors->has('seo_description'))
                                    <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('seo_description') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="seo_keyword">SEO Meta Keyword</label>
                                    <input type="text" class="form-control" name="seo_keyword" value="{{ old('seo_keyword', $product->seo_keyword) }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header" style="border-bottom: 1px solid #e3ebf3;">
                            <h4 class="card-title">Product Image</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="image">Product Image</label>
                                    <input type="file" name="image" class="form-control {{$errors->has('image')?'error':''}}" />
                                    @if ($errors->has('image'))
                                    <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('image') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <img src="{{asset($product->image())}}" style="max-width: 100px;" />
                                    @isset(json_decode(Auth::user()->permission->permission, true)['services']['add'])
                                    @if($product->imageFile)
                                    <a href="{{route('admin.mediesDelete',$product->imageFile->id)}}" class="mediaDelete" style="color: red;"><i class="fa fa-trash"></i></a>
                                    @endif
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" style="border-bottom: 1px solid #e3ebf3;">
                            <h4 class="card-title">Product Category</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="text-muted" style="font-size: 12px;">Shown as the small label on the project card (e.g. "Web Development").</p>
                                @if ($errors->has('categoryid*'))
                                <p style="color: red; margin: 0; font-size: 10px;">The Category Must Be a Number</p>
                                @endif
                                <div class="catagorydiv">
                                    <ul>
                                        @foreach($categories as $ctg)
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" value="{{$ctg->id}}" id="category_{{$ctg->id}}" name="categoryid[]" @foreach($product->productCtgs as $postctg)
                                                {{$postctg->reff_id==$ctg->id?'checked':''}} @endforeach/>
                                                <label class="custom-control-label" for="category_{{$ctg->id}}">{{$ctg->name}}</label>
                                            </div>
                                            @if($ctg->subCtgs->count() >0) @include('admin.products.includes.productsEditSubctg',['subcategories' => $ctg->subCtgs,'i'=>1]) @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @if($categories->isEmpty())
                                <p style="font-size: 12px;">No categories yet. <a href="{{route('admin.productsCategories')}}">Add categories</a></p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" style="border-bottom: 1px solid #e3ebf3;">
                            <h4 class="card-title">Product Action</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="status">Product Status</label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="status" name="status" {{$product->status=='active'?'checked':''}}/>
                                            <label class="custom-control-label" for="status">Active</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="fetured">Featured</label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="fetured" name="fetured" {{$product->fetured?'checked':''}}/>
                                            <label class="custom-control-label" for="fetured">Show on Home</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Published Date</label>
                                    <input type="date" class="form-control form-control-sm" name="created_at" value="{{$product->created_at->format('Y-m-d')}}">
                                    @if ($errors->has('created_at'))
                                    <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('created_at') }}</p>
                                    @endif
                                </div>
                                @isset(json_decode(Auth::user()->permission->permission, true)['services']['add'])
                                <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save changes</button>
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- Basic Inputs end -->
</div>

@endsection

@push('js')
<script>
    // Specification rows: add a blank row / remove a row
    (function(){
        var box = document.getElementById('specRows');
        document.getElementById('specAdd').addEventListener('click', function(){
            var row = box.querySelector('.specRow').cloneNode(true);
            row.querySelectorAll('input').forEach(function(i){ i.value = ''; });
            box.appendChild(row);
            row.querySelector('input').focus();
        });
        box.addEventListener('click', function(e){
            var btn = e.target.closest('.specRemove');
            if(!btn) return;
            var row = btn.closest('.specRow');
            if(box.querySelectorAll('.specRow').length > 1) row.remove();
            else row.querySelectorAll('input').forEach(function(i){ i.value = ''; });
        });
    })();
</script>
@endpush
