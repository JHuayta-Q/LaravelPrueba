<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        //execute algorithm
        $student = Student::all();
        //dd($student);
        return view('admin/index')->with('student', $student); 
    }
        //create
        //store
        //show
        //edit

    public function create(Request $request){
        
    }

    public function show($id){
        $student = Student::findOrFail($id);
    }

    public function edit($id){
        $student = Student::findOrFail($id);

    }

    public function update(Request $request, $id){
        $student = Student::find($id);
    }
        
   public function delete ($id){
       $delete = Student::findOrFail($id);
   }
}
