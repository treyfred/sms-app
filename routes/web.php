<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use App\Http\Controllers\SubjectController;
use App\Models\Subject;

Route::get('/', function () {
    $students =Student::all();
    return view('welcome', ['students'=>$students]);
});

// creating students crud routes
Route::get('/students', [StudentController::class, 'index'])->name('student.index'); //students data list
Route::get('/add_stu', [StudentController::class, 'show'])->name('student.show');  // adding a new student form
Route::post('/add_students', [StudentController::class, 'create'])->name('student.create'); // inserting student data to database
Route::put('/students/update/{student}', [StudentController::class, 'update'])->name('student.update'); //updating student data
Route::delete('/students/delete/{student}', [StudentController::class, 'destroy'])->name('student.delete'); //deleting student data
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('student.edit'); // students data edit form

// Route::get('/add_student', function () {
//     return view('students.add');
// })->name("add.student");

//creating subject crud routes 

Route::get('/subject', [SubjectController::class, 'index'])->name('subjects.index'); //subjects data list
Route::get('/add_sub', [SubjectController::class, 'show'])->name('subjects.show');  // adding a new subjects form
Route::post('/add_subjects', [SubjectController::class, 'create'])->name('subjects.create'); // inserting subjects data to database
Route::put('/subjects/update/{subjects}', [SubjectController::class, 'update'])->name('subjects.update'); //updating subjects data
Route::delete('/subjects/delete/{subjects}', [SubjectController::class, 'destroy'])->name('subjects.delete'); //deleting subjects data
Route::get('/subjects/{subjects}/edit', [SubjectController::class, 'edit'])->name('subjects.edit'); // subjects data edit form

//creating classrooms crud routes 

Route::get('/classrooms', [StudentController::class, 'index'])->name('classrooms.index'); //classrooms data list
Route::get('/add', [StudentController::class, 'show'])->name('classrooms.show');  // adding a new classrooms form
Route::post('/add_classrooms', [StudentController::class, 'create'])->name('classrooms.create'); // inserting classrooms data to database
Route::put('/classrooms/update/{classrooms}', [StudentController::class, 'update'])->name('classrooms.update'); //updating classrooms data
Route::delete('/classrooms/delete/{classrooms}', [StudentController::class, 'destroy'])->name('classrooms.delete'); //deleting classrooms data
Route::get('/classrooms/{classrooms}/edit', [StudentController::class, 'edit'])->name('classrooms.edit'); // classrooms data edit form
