<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exctracurricular;
class ExtracurricularController extends Controller
{
    public function index(){
        
        $ekskul = Exctracurricular::with('student')->get();
        return view('extracurricular', ['ekskulList' => $ekskul]);
}
}