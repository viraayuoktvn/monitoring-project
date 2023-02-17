<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('user/profile', [
            'title' => 'Edit Profile',
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,'.$id,
        ]);
    
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
    
        return redirect('/user/profile')->with('success', 'Profil berhasil diubah.');
    }
}
