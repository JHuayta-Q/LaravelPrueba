<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function showall(){
        $career = Career::all();
    }

    public function show($id){
        $career = Career::findOrFail($id);
        dd($career);
    }
}
