<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // to go to index
    public function index()
    {
        $students = Student::all();

        return view('student.index', compact('students'));
    }

    // to go to create page
    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $student = new Student;
        $student->name = $request->name;
        $student->address = $request->address;
        $student->age = $request->age;
        $student->phone_number = $request->phone_number;
        $student->save();

        return redirect('/');
    }

    // to go to edit page
    public function edit($id)
    {
        $students = Student::where('id', $id)->get();

        return view('student.edit', compact('students'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->address = $request->address;
        $student->age = $request->age;
        $student->phone_number = $request->phone_number;
        $student->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/');
    }
}
