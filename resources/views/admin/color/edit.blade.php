@extends('admin.master')

@section('title', 'Edit color')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Unit Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">color</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit color</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit color Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('color.update', $color->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">color Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="firstName" value="{{$color->name}}" name="name" placeholder="color Name" type="text">
                            </div>
                            <div class="row mb-4">
                                <label for="firstCode" class="col-md-3 form-label">color Code</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="firstCode" value="{{$color->code}}" name="code" placeholder="color Code" type="color">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="lastName" class="col-md-3 form-label">color Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="lastName" placeholder="Unit Description" name="description">{{$color->description}}</textarea>                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-md-3 form-label">Publication Status</label>
                                <div class="col-md-9 pt-3">
                                    <label> <input type="radio" value="1" {{$color->status == 1 ? 'checked' : ''}} name="status"><span> Published</span> </label>
                                    <label> <input type="radio" value="0" {{$color->status == 0 ? 'checked' : ''}} name="status"><span> Unpublished</span> </label>
                                </div>
                            </div>
                            <button class="btn btn-primary rounded-0 float-end" type="submit">Update Color Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
