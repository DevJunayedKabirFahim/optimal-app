@extends('admin.master')
@section('title', 'Edit Product Info')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col">
            <div class="card ">
                <div class="card-body">
                    <p class="text-center text-success">{{ session('message') }}</p>
                    <form id="formData" action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label class="col-md-3">Category Name</label>
                            <div class="col-md-9 form-group">
                                <select name="category_id" class="form-control select2-show-search form-select w-100" onchange="setSubCategory(this.value)" data-placeholder="Choose one">
                                    <option label="Choose one"></option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" @selected($category->id == $product->category_id)>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Subcategory Name</label>
                            <div class="col-md-9 form-group">
                                <select id="subCategoryId" name="sub_category_id" class="form-control select2-show-search form-select" data-placeholder="Choose one">
                                    <option label="Choose one"></option>
                                    @foreach($sub_categories as $sub_category)
                                        <option value="{{ $sub_category->id }}" @selected($sub_category->id == $product->sub_category_id)>{{$sub_category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Brand Name</label>
                            <div class="col-md-9 form-group">
                                <select name="brand_id" class="form-control select2-show-search form-select" data-placeholder="Choose one">
                                    <option label="Choose one"></option>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}" @selected($brand->id == $product->brand_id)>{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Unit Name</label>
                            <div class="col-md-9 form-group">
                                <select name="unit_id" class="form-control select2 form-select" data-placeholder="Choose one">
                                    <option label="Choose one"></option>
                                    @foreach($units as $unit)
                                        <option value="{{ $unit->id }}" @selected($unit->id == $product->unit_id)>{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Color Name</label>
                            <div class="col-md-9 form-group">
                                <select multiple class="form-control select2-show-search form-select" name="colors[]" data-placeholder="Choose one">
                                    <option label="Choose one"></option>
                                    @foreach($colors as $color)
                                        <option value="{{ $color->id }}" @foreach($product->colors as $singleColor) @selected($color->id == $singleColor->color_id) @endforeach>{{$color->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Size Name</label>
                            <div class="col-md-9 form-group">
                                <select multiple name="sizes[]" class="form-control select2-show-search form-select" data-placeholder="Choose one">
                                    <option label="Choose one"></option>
                                    @foreach($sizes as $size)
                                        <option value="{{ $size->id }}" @foreach($product->sizes as $singleSizes) @selected($size->id == $singleSizes->size_id) @endforeach>{{$size->code}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Product Name</label>
                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $product->name }}" placeholder="Product name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="code" class="col-md-3">Product Code</label>
                            <div class="col-md-9">
                                <input id="code" type="text" class="form-control" name="code" value="{{ $product->code }}" placeholder="Product code"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="short_description" class="col-md-3">Short Description</label>
                            <div class="col-md-9">
                                <textarea name="short_description" id="short_description" class="form-control" placeholder="Short description">{{ $product->short_description }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="long_description" class="col-md-3">Long Description</label>
                            <div class="col-md-9">
                                <textarea name="long_description" id="summernote" class="form-control" placeholder="Long description">{{ $product->long_description }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Product Image</label>
                            <div class="col-md-5">
                                <input type="file" class="dropify" data-height="200" name="image"/>
                                <img src="{{ asset($product->image) }}" alt="" height="120" width="150"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Product Other Images</label>
                            <div class="col-md-5">
                                <input type="file" class="form-control mb-3" name="other_images[]" accept=".jpg, .png, image/jpeg, image/png" multiple />
                                @foreach($product->productOtherImages as $productOtherImage)
                                    <img src="{{ asset($productOtherImage->image) }}" alt="" height="120" width="150"/>
                                @endforeach
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Product Price</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="number" class="form-control" value="{{ $product->regular_price }}" name="regular_price" placeholder="Regular Price (৳)"/>
                                    <input type="number" class="form-control" name="selling_price" value="{{ $product->selling_price }}" placeholder="Selling Price (৳)"/>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="stock_amount" class="col-md-3">Stock Amount</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="stock_amount" value="{{ $product->stock_amount }}" placeholder="Stock Amount"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Publication Status</label>
                            <div class="col-md-9 form-group">
                                <label><input type="radio" name="status" value="1" {{ $product->status == 1 ? 'checked' : '' }} /> Published</label>
                                <label><input type="radio" name="status" value="0" {{ $product->status == 0 ? 'checked' : '' }}/> Unpublished</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-radius btn-primary w-50 pt-2 pb-2" value="">Update Product Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
