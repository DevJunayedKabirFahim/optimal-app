@extends('admin.master')
@section('title', 'Create Subcategory')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Subcategory Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Subcategory</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col">
            <div class="card ">
                <div class="card-body">
                    <p class="text-center text-success">{{ session('message') }}</p>
                    <form action="{{ route('sub-category.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-2">Category Name</label>
                            <div class="col-md-9 form-group">
                                <select name="category_id" class="form-control select2-show-search form-select w-100" data-placeholder="Choose one">
                                    <option label="Choose one"></option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-2">Subcategory Name</label>
                            <div class="col-md-9 form-group">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Subcategory name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-md-2">Description</label>
                            <div class="col-md-9 form-group">
                                <textarea name="description" id="description" class="form-control" placeholder="Subcategory description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-2">Image</label>
                            <div class="col-md-5 form-group">
                                <input type="file" class="dropify" data-height="200" name="image"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-2">Publication Status</label>
                            <div class="col-md-9 form-group">
                                <label><input type="radio" name="status" value="1" checked/> Published</label>
                                <label><input type="radio" name="status" value="0"/> Unpublished</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-2"></label>
                            <div class="col-md-9 form-group">
                                <button type="submit" class="btn btn-radius btn-primary" value="">Create New Subcategory</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
