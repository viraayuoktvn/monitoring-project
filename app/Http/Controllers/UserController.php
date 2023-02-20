<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('user/index', [
            'title' => 'Profile',
            'user' => $user,
        ]);
    }
    public function edit()
    {
        $user = Auth::user();
        return view('user/profile', [
            'title' => 'Edit Profile',
            'user' => $user,
        ]);
    }

    public function update(Request $request, $id)
    {
        $photo = $request->file('photo');

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,'.$id,
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        $path = $photo->store('public/images');

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->photo = $photo->hashName();

        $user->update();
    
        return redirect('/user')->with('success', 'Profil berhasil diubah.');
    }
}
