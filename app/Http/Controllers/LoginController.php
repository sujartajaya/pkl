<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            //return view('welcome');
            $student = Student::where('user_id',Auth::user()->id)->get()->first();
            $stdjson = json_encode($student);
            $data = json_decode($stdjson);
            if (Auth::user()->type == 'user') {
                if (empty($data)) {
                    /** dijalankan jika pendaftaran student belum lengkap setelah sigup */
                    $name = Auth::user()->name;
                    return view('student.form',compact('name'));
                }
                return view('student.index',compact('data'));
            } 
            return view('admin.index');
        }else{
            return view('login.index');
        }
    }

    // public function actionlogin(Request $request)
    // {
    //     $data = [
    //         'email' => $request->input('email'),
    //         'password' => $request->input('password'),
    //     ];

    //     if (Auth::Attempt($data)) {
    //         return redirect('home');
    //     }else{
    //         Session::flash('error', 'Email atau Password Salah');
    //         return redirect('/');
    //     }
    // }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

         return back()->with('loginError','Login Failed!');
    }
}
