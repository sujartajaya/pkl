<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $data = Student::where('user_id',Auth::user()->id)->first();
            return view('student.index', compact('data'));
        }
        return view('login.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $credentials = $request->validate([
            'nim' => ['required','unique:students'],
            'fakultas' => ['required'], 
            'prodi' => ['required'],
        ]);
        $credentials['user_id'] = Auth::user()->id;
        $data = Student::create($credentials);

        if ($data) {
            return view('student.index', compact('data'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $data = User::with('student')->where('id',Auth::user()->id)->first();
        return json_encode($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $data = Student::where('user_id',Auth::user()->id)->first();
        $name = Auth::user()->name;
        return view('student.form',['name'=>$name, 'nim'=>$data->nim, 'fakultas'=>$data->fakultas,'prodi'=>$data->prodi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'nim' => 'sometimes|string|unique:students',  
            'fakultas' => 'sometimes|string',
            'prodi' => 'sometimes|string',
            // Additional validation rules for partial updates
        ]);
        $data1 = Student::where('user_id',Auth::user()->id)->first();
        $idstudent = Student::findOrFail($data1->id);
        $idstudent->update($validatedData);
        $data = Student::where('user_id',Auth::user()->id)->first();
        return view('student.index', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
