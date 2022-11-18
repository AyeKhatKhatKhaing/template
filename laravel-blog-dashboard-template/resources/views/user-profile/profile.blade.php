@extends('layouts.app')
@section("title")
    Edit Profile
@stop
@section("content")
    <x-bread-crumb>
        <li class="breadcrumb-item bg-transparent"><a href="{{ route('profile') }}">Profile</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profile Photo</li>
    </x-bread-crumb>

    <div class="row">
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img style="width: 150px" src="{{ isset(Illuminate\Support\Facades\Auth::user()->photo)? asset('storage/profile/'.\Illuminate\Support\Facades\Auth::user()->photo) : asset('dashboard/img/user-default.png') }}" alt="">
                    </div>

                    <form action="{{ route('profile.changePhoto') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="">
                            <div class="form-group">
                                <label class="text-center feather-image">Select New Photo</label>
                                <input name="photo" type="file" class="form-control p-1 mr-2 overflow-hidden" required>
                            </div>
                            <button type="submit" class="btn mt-3 btn-primary btn-block feather-upload"> Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
