@extends('admin.master')
@section('title', 'Edit Color')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Color Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Color</a></li>
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
                    <form action="{{ route('color.update', $color->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="name" class="col-md-2">Color Name</label>
                            <div class="col-md-9 form-group">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $color->name }}" placeholder="Color name"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="code" class="col-md-2">Color Code</label>
                            <div class="col-md-9 form-group">
                                <input id="code" type="color" class="form-control" name="code" value="{{ $color->code }}"  placeholder="Color code"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-md-2">Description</label>
                            <div class="col-md-9 form-group">
                                <textarea name="description" id="description" class="form-control" placeholder="Color description">{{ $color->description }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-2">Publication Status</label>
                            <div class="col-md-9 form-group">
                                <label><input type="radio" name="status" value="1" {{ $color->status == 1 ? 'checked' : ''}} /> Published</label>
                                <label><input type="radio" name="status" value="0" {{ $color->status == 0 ? 'checked' : ''}}/> Unpublished</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-2"></label>
                            <div class="col-md-9 form-group">
                                <button type="submit" class="btn btn-radius btn-primary" value="">Update Color info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

