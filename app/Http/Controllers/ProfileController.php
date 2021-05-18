<?php

namespace App\Http\Controllers;

//use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use App\User;



class ProfileController extends Controller
{
    public function edit(){
        return view('editProfile');
    }

    public function update(Request $request){

        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|min:6',
            'currentPassword' => 'required|string|min:6',
            'newPassword' => 'nullable|string|min:6|confirmed',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:10000',
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        
        $user->name = request('name');
        $user->email = request('email');

        if (Hash::check(request('currentPassword'), $user->password)) {
            if(request('newPassword') != null || !empty(request('newPassword'))){
                $user->password = Hash::make(request('newPassword'));
            } 
        }else{
            return back()->with('passwordError', __('The current password you entered is incorrect'));
        }

        if(request('avatar') != null){
            $imagen = $request->file('avatar')->store('/public/imagenes');
            $url = Storage::url($imagen);
            $user->avatar = $url;
        }
        
        $user->update();
        return back()->with('status', __('Profile updated successfully'));
    }
}
