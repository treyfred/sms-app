<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{   
    public function index(){
       $students = Student::all();
       return view('students.data', compact('students'));

    }
    public function create(Request $request){
        // $this -> validate(
            $request -> validate( [
                'name' => 'required',
                'class' => 'required',
                'age' => 'required',
                'gender' => 'required',
                ]
        );
        Student::create($request->all());
         return redirect()->route('student.index')
         ->with('success', 'Data saved successfully');


    }

    public function show(){
        return view('students.add');
    }

    public function edit($id){
        $student= Student::find($id);
        return view('students.edit', compact('student'));

    }

    public function update(Request $request, $id){
        $request -> validate( [
            'name' => 'required',
            'class' => 'required',
            'age' => 'required',
            'gender' => 'required',
            ]
        );
        $student = Student::find($id);
        $student-> update($request->all());

       return redirect()-> route('student.index');
    }

    public function destroy($id){
        $student= Student::find($id);
        $student->delete();
        return redirect()-> route('student.index');
     }
}
