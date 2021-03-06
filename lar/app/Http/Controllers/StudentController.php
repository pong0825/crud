<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->paginate(3);
        return view('students.index',compact('students'))
        ->with('i',(request()->input('page',1)-1)*3);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'course' => 'required',
        'email' => 'required',
        'phone' => 'required',
        
        ]);

        Student::create($request->all());
        
        return redirect()->route('students.index')
        ->with('success', 'Student information created succesful.');
    }

    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([

        ]);
        
        $student->update($request->all());
        
        return redirect()->route('students.index')
        ->with('success','Student information updated.');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
        ->with('success', 'Student information deleted.');
    }

}
