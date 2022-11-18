<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('head')
</head>

<body>

@guest
    @yield('content')
@else
    <section class="main container-fluid">
        <div class="row">
            <!-- sidebar start -->
        @include('layouts.sidebar')

        <!-- sidebar end -->
            <div class="col-12 col-lg-9 col-xl-10 vh-100 content">
            @include('layouts.header')
            <!-- content area stat -->
            @yield('content')
            <!-- content area end -->
            </div>

        </div>
    </section>
@endguest
<script src={{ asset('js/app.js') }}></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
        crossorigin="anonymous"></script>

@auth
    @empty(\Illuminate\Support\Facades\Auth::user()->phone)
        @include('user-profile.updateInfo')
    @endempty
@endauth
@include('toast')
@include('alert')

@yield('foot')
</body>

</html>
