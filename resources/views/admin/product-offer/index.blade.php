@extends('admin.master')
@section('title', 'Manage Offers')
@section('body')

    <div class="page-header">
        <div>
            <h1 class="page-title">Product Offer Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Offer</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Offer</li>
            </ol>
        </div>
    </div>

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Offers</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Serial No</th>
                                <th class="wd-15p border-bottom-0">Product Name</th>
                                <th class="wd-20p border-bottom-0">Image</th>
                                <th class="wd-15p border-bottom-0">First Title</th>
                                <th class="wd-15p border-bottom-0">Second Title</th>
                                <th class="wd-15p border-bottom-0">Third Title</th>
                                <th class="wd-10p border-bottom-0">Status</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($product_offers as $product_offer)
                                <tr class="text-center">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product_offer->product->name}}</td>
                                    <td>
                                        <img src="{{asset($product_offer->image)}}" alt="" height="50" width="70">
                                    </td>
                                    <td>{{$product_offer->first_title}}</td>
                                    <td>{{$product_offer->second_title}}</td>
                                    <td>{{$product_offer->third_title}}</td>
                                    <td>{{$product_offer->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td class="text-center">
                                        <div class="row justify-content-center">
                                            <div class="col-2 me-2">
                                                <a href="{{route('product-offer.show', $product_offer->id)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                            </div>
                                            <div class="col-2 me-2">
                                                <a href="{{route('product-offer.edit', $product_offer->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                            </div>
                                            <div class="col-2">
                                                <form action="{{route('product-offer.destroy', $product_offer->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure want to delete this?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection
