<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

    public function resetPwd()
    {
        return view('user.resetpwd');
    }

    public function changePwd(Request $request)
    {
        $request->validate([
            'current_password' => ['required','string','min:8'],
            'password' => ['required', 'string', 'min:8', 'same:confirm_password'],
            'confirm_password' => ['min:8']
        ]);

        $currentPasswordStatus = Hash::check($request->current_password, Auth::user()->password);
        if($currentPasswordStatus){
             User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back()->with('message','Password Updated Successfully');
        } else {
            return redirect()->back()->with('message','Current Password does not match with Old Password');
        }
    }
}
