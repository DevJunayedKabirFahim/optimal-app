@extends('admin.master')
@section('title', 'Edit Product Offer')
@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Offer Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Offer</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Offer</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">

                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <form action="{{route('product-offer.update', $product_offer->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="name" class="col-md-2">Select Product</label>
                            <div class="col-md-7 form-group">
                                <div class="form-group">
                                    <ul>
                                        <li class="select-client">
                                            <select class="form-control select2-style1" name="product_id" data-placeholder="Choose One">
                                                <option label="Choose one" disabled selected></option>
                                                @foreach($products as $product)
                                                    <option value="{{ $product->id }}" @selected($product->id == $product_offer->product_id)>{{$product->name}}</option>
                                                @endforeach
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-2">First Title</label>
                            <div class="col-md-7 form-group">
                                <input  type="text" class="form-control" name="first_title" value="{{$product_offer->first_title}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-2">Second Title</label>
                            <div class="col-md-7 form-group">
                                <input  type="text" class="form-control" name="second_title" value="{{$product_offer->second_title}}"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-2">Third Title</label>
                            <div class="col-md-7 form-group">
                                <input  type="text" class="form-control" name="third_title" value="{{$product_offer->third_title}}"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-2">Offer Description</label>
                            <div class="col-md-7 form-group">
                                <textarea class="form-control" name="description">{{$product_offer->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-2 form-label">Image</label>
                            <div class="col-md-7">
                                <input class="dropify" name="image" type="file" data-height="200"/>
                                <img src="{{asset($product_offer->image)}}" alt="" height="100" width="120"/>
                            </div>
                        </div>

                        <div class="row">
                            <label for="description" class="col-md-2">Status</label>
                            <div class="col-md-7 form-group">
                                <label class="rdiobox">
                                    <input type="radio" class="radio-primary" {{$product_offer->status == 1 ? 'checked' : ''}} checked value="1" name="status"/>
                                    <span> Published</span>
                                </label>

                                <label class="rdiobox">
                                    <input type="radio" class="radio-primary" {{$product_offer->status == 0 ? 'checked' : ''}} value="0" name="status"/>
                                    <span> Unpublished</span>
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-md-2"></label>
                            <div class="col-md-7 form-group">
                                <input type="submit" class="btn btn-radius btn-primary" value="Update Offer Info"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
