@extends('admin.master')
@section('title', 'Add Product Offer')
@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Offer Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Offer</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Offer</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">

                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <form action="{{route('product-offer.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-3">Select Product</label>
                            <div class="col-md-9 form-group">
                                <div class="form-group">
                                    <ul>
                                        <li class="select-client">
                                            <select class="form-control select2-style1" name="product_id" data-placeholder="Choose One">
                                                <option label="Choose one" disabled selected></option>
                                                @foreach($products as $product)
                                                    <option value="{{ $product->id }}">{{$product->name}}</option>
                                                @endforeach
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">First Title</label>
                            <div class="col-md-9 form-group">
                                <input  type="text" class="form-control" name="first_title"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Second Title</label>
                            <div class="col-md-9 form-group">
                                <input  type="text" class="form-control" name="second_title"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Third Title</label>
                            <div class="col-md-9 form-group">
                                <input  type="text" class="form-control" name="third_title"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Offer Description</label>
                            <div class="col-md-9 form-group">
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 form-label">Image</label>
                            <div class="col-md-9">
                                <input class="dropify" name="image" type="file" data-height="200"/>
                            </div>
                        </div>

                        <div class="row">
                            <label for="description" class="col-md-3">Status</label>
                            <div class="col-md-9 form-group">
                                <label class="rdiobox">
                                    <input type="radio" class="radio-primary" checked value="1" name="status"/>
                                    <span> Published</span>
                                </label>

                                <label class="rdiobox">
                                    <input type="radio" class="radio-primary" value="0" name="status"/>
                                    <span> Unpublished</span>
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-md-3"></label>
                            <div class="col-md-9 form-group">
                                <input type="submit" class="btn btn-radius btn-primary" value="Create New Offer Info"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
