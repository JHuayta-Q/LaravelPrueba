<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        //execute algorithm
        $student = Student::where('state', 1)->paginate(5);
        //dd($student);
        return view('studentform/index')->with('student', $student); 
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'code'=>'required',
            'career'=>'required',
        ]);
        $newstudent = new Student(); 
        $newstudent->name = $request->name;
        $newstudent->code = $request->code;
        $newstudent->career = $request->career;
        $newstudent->save();

        return redirect()->route('studentlist.index')->with('mensaje', 'Estudiante Agregado Correctamente');
    }
    public function edit($id){
        $student = Student::find($id);
        return view('studentform/editar')->with('student', $student);
    }

    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->name = $request->name;
        $student->code = $request->code;
        $student->career = $request->career;
        $student->save();

        return redirect()->route('studentlist.index')->with('mensaje1', 'Estudiante Editado Correctamente');
    }
}
