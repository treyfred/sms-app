<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Classroom;

class ClassroomController extends Controller
{
    public function index(){
        $classrooms = Classroom::all();
        return view('classrooms.data', compact('classrooms'));
 
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
         Classroom::create($request->all());
          return redirect()->route('classrooms.index')
          ->with('success', 'Data saved successfully');
 
 
     }
 
     public function show(){
         return view('classrooms.add');
     }
 
     public function edit($id){
         $student= Classroom::find($id);
         return view('classrooms.edit', compact('classroom'));
 
     }
 
     public function update(Request $request, $id){
         $request -> validate( [
             'name' => 'required',
             'class' => 'required',
             'age' => 'required',
             'gender' => 'required',
             ]
         );
         $classroom = Classroom::find($id);
         $classroom-> update($request->all());
 
        return redirect()-> route('classrooms.index');
     }
 
     public function destroy($id){
         $classroom= Classroom::find($id);
         $classroom->delete();
         return redirect()-> route('classrooms.index');
      }
}
