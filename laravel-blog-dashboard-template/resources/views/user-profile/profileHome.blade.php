@extends('layouts.app')
@section("title")
    Edit Profile
@stop
@section("content")
    <x-bread-crumb>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </x-bread-crumb>

    <div class="row">
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img style="width: 150px" src="{{ isset(Illuminate\Support\Facades\Auth::user()->photo)? asset('storage/profile/'.\Illuminate\Support\Facades\Auth::user()->photo) : asset('dashboard/img/user-default.png') }}" alt="">
                    </div>
                    <form>
                        @csrf
                        <div class="form-group">
                            <label for="" class="feather-user">Name</label>
                            <input type="text" required class="form-control"  disabled value={{ \Illuminate\Support\Facades\Auth::user()->name  }}>
                        </div>
                        <div class="form-group">
                            <label for="" class="feather-mail"> Email</label>
                            <input type="text" required class="form-control" disabled value={{ \Illuminate\Support\Facades\Auth::user()->email}}>
                        </div>
                        <div class="form-group">
                            <label for="" class="feather-mail"> Phone</label>
                            <input type="text" required class="form-control" disabled value={{ \Illuminate\Support\Facades\Auth::user()->phone}}>
                        </div>
                        <div class="form-group">
                            <label for="" class="feather-mail"> Address</label>
                            <textarea type="text" required class="form-control" disabled>{{\Illuminate\Support\Facades\Auth::user()->address}}</textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
