<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserManagerController extends Controller
{
    public function index(){
        $users=User::all();
        return view('user-manager.index',compact('users'));
    }

    public function makeAdmin(Request $request){

        $user=User::find($request->id);
        if($user->role == 1){
            $user->role='0';
            $user->update();
        }
        return redirect()->route('userManager.index')->with("toast",["icon"=>"success","title"=>"Updated role for user".$user->name]);
    }

    public function banUser(Request $request){

        $user=User::find($request->id);
        if($user->isBanned == 1){
            $user->isBanned='0';
            $user->update();
        }
        return redirect()->route('userManager.index')->with("toast",["icon"=>"success","title"=>"$user->name is Banned"]);
    }

    public function restoreUser(Request $request){

        $user=User::find($request->id);
        if($user->isBanned == 0){
            $user->isBanned='1';
            $user->update();
        }
        return redirect()->route('userManager.index')->with("toast",["icon"=>"success","title"=>"$user->name is restored"]);
    }
}
