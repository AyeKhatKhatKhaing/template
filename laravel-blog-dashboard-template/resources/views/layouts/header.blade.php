<div class="row header mb-4">
    <div class="col-12">
        <div class="bg-primary rounded p-2 d-flex justify-content-between align-items-center">
            <button class="text-light show-sidebar-btn  feather-menu btn btn-primary d-block d-lg-none"
                    style="font-size:2em">
            </button>
            <form action="" class="d-none d-md-block">
                <div class="form-inline d-flex">
                    <input type="text" class="form-control mr-2">
                    <button class="btn btn-light feather-search text-primary ml-2 "
                            style="font-size:1em"></button>
                </div>
            </form>
            <div class="dropdown">
                <button class="btn btn-light" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    <img src="{{ isset(Illuminate\Support\Facades\Auth::user()->photo)? asset('storage/profile/'.\Illuminate\Support\Facades\Auth::user()->photo) : asset('dashboard/img/user-default.png') }}" class="admin-img" alt="">
                    <span class="ml-2 d-none d-md-inline-block">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>

    </div>
</div>
