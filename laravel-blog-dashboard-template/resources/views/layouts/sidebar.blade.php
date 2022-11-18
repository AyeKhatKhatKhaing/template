<div class="col-12 col-lg-3 col-xl-2 vh-100 sidebar ">
    <div class="d-flex justify-content-between align-items-center py-2 mt-2 nav-brand">
        <div class="d-flex justify-content-between align-items-center">
                        <span class="bg-primary p-2 rounded mr-1">
                            <i class="feather-shopping-bag text-white h4"></i>
                        </span>
            <h4 class="font-weight-bolder text-uppercase text-primary mb-0">MyShop</h4>
        </div>
        <button class="hide-sidebar-btn btn btn-light text-primary feather-x d-block d-lg-none"
                style="font-size:2em">
        </button>
    </div>
    <div class="nav-menu">
        <ul>

            <x-menu-item link="{{route('home')}}" name="Home" class="feather-home"></x-menu-item>
            <x-menu-spacer></x-menu-spacer>

            @if(\Illuminate\Support\Facades\Auth::user()->role == 0)
            <x-menu-title title="User Manager"></x-menu-title>
            <x-menu-item name="Users" class="feather-users" counter="10" link="{{route('userManager.index')}}"></x-menu-item>
            <x-menu-spacer></x-menu-spacer>
            @endif

            <x-menu-title title="Manage User Profile"></x-menu-title>
            <x-menu-item name="Your Profile" class="feather-user-check" link="{{route('profile')}}" ></x-menu-item>
            <x-menu-item name="Update Info" class="feather-info" link="{{route('profile.edit.info')}}" ></x-menu-item>
            <x-menu-item name="Change Password" class="feather-refresh-ccw" link="{{route('profile.edit.password')}}" ></x-menu-item>
            <x-menu-item name="Update Profile Photo" class="feather-image" link="{{route('profile.edit.photo')}}" ></x-menu-item>
            <x-menu-spacer ></x-menu-spacer>
            <a class="btn btn-outline-primary btn-block" href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </ul>


    </div>

</div>
