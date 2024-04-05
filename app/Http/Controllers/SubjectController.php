<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index(){
        $subjects = Subject::all();
        return view('subjects.data', compact('subjects'));
 
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
         Subject::create($request->all());
          return redirect()->route('subjects.index')
          ->with('success', 'Data saved successfully');
 
 
     }
 
     public function show(){
         return view('subjects.add');
     }
 
     public function edit($id){
         $subject= Subject::find($id);
         return view('subjects.edit', compact('subject'));
 
     }
 
     public function update(Request $request, $id){
         $request -> validate( [
             'name' => 'required',
             'class' => 'required',
             'age' => 'required',
             'gender' => 'required',
             ]
         );
         $subject = Subject::find($id);
         $subject-> update($request->all());
 
        return redirect()-> route('subjects.index');
     }
 
     public function destroy($id){
         $subject= Subject::find($id);
         $subject->delete();
         return redirect()-> route('subjects.index');
      }
}
