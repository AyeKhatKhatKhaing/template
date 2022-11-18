@extends('layouts.app')
@section('title')
    User Manager
@endsection
@section('content')
    <x-bread-crumb>
        <li class="breadcrumb-item active" aria-current="page">User Manager</li>

    </x-bread-crumb>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4> <i class="feather-users me-1"></i>User List</h4>
                        <table class="table table-hover border-1 border">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Role</td>
                                    <td>Control</td>
                                    <td>Created at</td>
                                    <td>Updated at</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role}}</td>
                                        <td>
                                            @if($user->role == 1)
                                                <form class="d-inline-block" action="{{route('userManager.makeAdmin')}}" method="post" id="form{{$user->id}}">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$user->id}}">

                                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="return makeConfirm({{$user->id}})">Make Admin</button>
                                                </form>
                                                @if($user->isBanned==0)
                                                    <form class="d-inline-block" action="{{route('userManager.restoreUser')}}" method="post" id="restoreform{{$user->id}}">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$user->id}}">

                                                        <button type="button" class="btn btn-sm btn-outline-warning" onclick="return restoreConfirm({{$user->id}})">Restore User</button>
                                                    </form>
                                                @else
                                                    <form class="d-inline-block" action="{{route('userManager.banUser')}}" method="post" id="banform{{$user->id}}">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$user->id}}">

                                                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="return banConfirm({{$user->id}})">Ban user</button>
                                                    </form>
                                                @endif
                                            @endif


                                        </td>
                                        <td>{{$user->created_at}}</td>
                                        <td>{{$user->updated_at}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

@endsection
@section('foot')
    <script>
        const makeConfirm=(id)=>{
            Swal.fire({
                title: `Are you sure to upgrade the role for this user ?`,
                text: "User role ကို  Admin role အဖြစ်ပြောင်းလဲပေးမှာ ဖြစ်ပါတယ်၊။",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#9561e2',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Upgraded!',
                        `User ကို Admin role ပေးလိုက်ပါပြီ `,
                        'success'
                    )
                    setTimeout(function(){
                        $('#form'+id).submit();
                    },1500)

                }
            })

        }

        const banConfirm=(id)=>{
            Swal.fire({
                title: `Are you sure to ban this user ?`,
                text: "User account ကိုပိတ်လိုက်မှာ ဖြစ်ပါတယ်။",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#9561e2',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Banned!',
                        `User account ကို ပိတ်လိုက်ပါပြီ `,
                        'success'
                    )
                    setTimeout(function(){
                        $('#banform'+id).submit();
                    },500)

                }
            })

        }

        const restoreConfirm=(id)=>{
            Swal.fire({
                title: `Are you sure to restore this user ?`,
                text: "User account ကိုပြန်လည်အသုံးပြုခွင့်ပေးမှာ ဖြစ်ပါတယ်။",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#9561e2',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Banned!',
                        `User account ကို ပြန်လည်ဖွင့်လိုက်ပါပြီ `,
                        'success'
                    )
                    setTimeout(function(){
                        $('#restoreform'+id).submit();
                    },500)

                }
            })

        }
    </script>
@endsection
