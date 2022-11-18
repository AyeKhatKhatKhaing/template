@extends('layouts.app')

@section('content')
    <x-bread-crumb>
        <li class="breadcrumb-item active" aria-current="page">Home</li>
    </x-bread-crumb>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                        <button class="btn btn-primary test-alert">Alert</button>
                        <button class="btn btn-primary test-toast">Toast</button>
                </div>



            </div>
        </div>
    </div>
</div>
@endsection
@section('foot')
    <script>
        $('.test-alert').click(function(){
            Swal.fire({
                icon: 'success',
                title: 'Insert Success',
                text: 'User info insert successfully',
            })
        })
    </script>
@endsection
