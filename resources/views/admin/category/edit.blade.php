@extends('admin.master')
@section('title', 'Edit Category')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Category Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col">
            <div class="card ">
                <div class="card-body">
                    <p class="text-center text-success">{{ session('message') }}</p>
                    <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="name" class="col-md-2">Category Name</label>
                            <div class="col-md-9 form-group">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $category->name }}" placeholder="Category name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-md-2">Description</label>
                            <div class="col-md-9 form-group">
                                <textarea name="description" id="description" class="form-control" placeholder="Category description">{{ $category->description }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-2">Image</label>
                            <div class="col-md-5 form-group">
                                <input type="file" class="dropify" data-height="200" name="image"/>
                                <img src="{{asset($category->image)}}" class="mt-3" height="100" width="130" alt=""/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-2">Publication Status</label>
                            <div class="col-md-9 form-group">
                                <label><input type="radio" name="status" {{$category->status == 1 ? 'checked' : ''}} value="1" /> Published</label>
                                <label><input type="radio" name="status" {{$category->status == 0 ? 'checked' : ''}} value="0"/> Unpublished</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-2"></label>
                            <div class="col-md-9 form-group">
                                <button type="submit" class="btn btn-radius btn-primary" value="">Update Category Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
