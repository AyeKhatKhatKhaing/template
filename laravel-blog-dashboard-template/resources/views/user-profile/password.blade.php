@extends('layouts.app')
@section("title")
    Edit Profile
@stop
@section("content")
    <x-bread-crumb>
        <li class="breadcrumb-item bg-transparent"><a href="{{ route('profile') }}">Profile</a></li>
        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
    </x-bread-crumb>
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('profile.changePassword') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="feather-lock"> Current Password</label>
                            <input type="text" required class="form-control" name="current_password" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                            <label for="" class="feather-refresh-ccw"> New Password</label>
                            <input type="text" required class="form-control" name="new_password" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <label for="" class="feather-check"> Confirm Password</label>
                            <input type="text" required class="form-control" name="confirm_new_password" placeholder="Confirm New Password">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-5 mt-3">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="sure" name="sure" required>
                                    <label class="custom-control-label text-muted" for="sure">
                                        I'm sure
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary feather-refresh-ccw" type="submit"> Change Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
