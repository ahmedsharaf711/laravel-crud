<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use App\Http\Requests\StudentRequest;
class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(3);
        return view('layouts.welcome' , compact('students'));
    }
    public function create()
    {
        return view('layouts.create');
    }
    public function store(StudentRequest $req)
    {
        // dd($req->all());
     $student = new Student;
     $student->first_name = $req->fname;
     $student->last_name = $req->lname;
     $student->email = $req->mail;
     $student->phone = $req->phone;
     $student->save();
     $student->paginate(3);
     return redirect('/')->with('successMsg' , 'New Student Added');
    }
    public function edit($id)
    {
        $student = Student::find($id);
        return view('layouts.edit' , compact('student'));
    }
    public function update(StudentRequest $req , $id)
    {
        $student = Student::find($id);
        $student->first_name = $req->fname;
        $student->last_name = $req->lname;
        $student->email = $req->mail;
        $student->phone = $req->phone;
        $student->save();
        return redirect('/')->with('successMsg' , 'Student Updated Successfully');
    }
    public function delete($id)
    {
        Student::find($id)->delete();
        return redirect('/')->with('successMsg' , 'Student Deleted Successfully');
    }
}
