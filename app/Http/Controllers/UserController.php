<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);
        $credentials['password'] = bcrypt($credentials['password']);
        $user = User::create($credentials);

        if ($user) {
            /** setelah daftar user disuruh login pake email dan password yang baru didaftar */
            return view('login.index'); 
        }
    }

    /** Get all user dan relasi student */
    public function getUsers()
    {
        $users = User::with('student')->get();
        return json_encode($users);
    }


    public function searchUsers(Request $request)
    {
        $users = User::with('student')->where('name','like', '%'.$request->route()->parameter('search').'%')->get();
        return json_endcode($users);
    }

    public function getUsersWithPage()
    {
        $users = User::with('student')->paginate(20);

        return view('user.user',compact('users'));
    }
}
