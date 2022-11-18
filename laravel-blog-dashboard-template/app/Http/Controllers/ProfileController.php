<?php

namespace App\Http\Controllers;

use App\Rules\MatchOldPassword;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    //profileHome.blade.php

    public function profile(){
        return view('user-profile.profileHome');
    }

    //photo
    public function editPhoto(){
        return view('user-profile.profile');
    }

    public function changePhoto(Request $request){
        $request->validate([
            "photo"=>"required|mimetypes:image/jpg,image/png,image/jpeg|file|max:2500"
        ]);
        $dir="public/profile";
        Storage::delete($dir.Auth::user()->photo);

        $newName=uniqid()."_photo.".$request->file("photo")->getClientOriginalExtension();
        $request->file("photo")->storeAs($dir,$newName);

        $user=\App\User::find(Auth::id());
        $user->photo=$newName;
        $user->update();

        return redirect()->back()->with("toast",["icon"=>"success","title"=>"Your Photo Changed Successfully"]);
    }

    //Password
    public function editPassword(){
        return view('user-profile.password');
    }

    public function changePassword(Request $request){
        $request->validate([
            "current_password"=>['required',new MatchOldPassword()],
            "new_password"=>['required','min:8'],
            "confirm_new_password"=>['same:new_password']
        ]);

        \App\User::find(\auth()->user()->id)->update(['password'=>Hash::make($request->new_password)]);
        Auth::logout();
        return redirect()->route('login')->with("toast",["icon"=>"success","title"=>"Your Password Changed Successfully"]);
    }

    //info
    public function updateInfo(Request $request){
        $request->validate([
            "phone"=>'required',
            "address"=>'required|min:5'
        ]);
        $currentUser=\App\User::find(Auth::id());
        $currentUser->phone=$request->phone;
        $currentUser->address=$request->address;
        $currentUser->save();
        return redirect()->back()->with("toast",["icon"=>"success","title"=>"Your Info Updated Successfully"]);
    }

    public function editInfo(){
        return view('user-profile.info');

    }

    public function changeInfo(Request $request){
        $request->validate([
            "new_name"=>'required|min:3|max:50',
            "new_email"=>'required|min:3|max:50',
            "new_phone"=>'required',
            "new_address"=>'required|min:5'
        ]);
        $user=\App\User::find(\auth()->user()->id);
        $user->name=$request->new_name;
        $user->email=$request->new_email;
        $user->phone=$request->new_phone;
        $user->address=$request->new_address;
        $user->update();
        return redirect()->route('profile.edit.info')->with("toast",["icon"=>"success","title"=>"Your Information Changed Successfully"]);
    }
}
