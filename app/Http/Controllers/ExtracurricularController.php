<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exctracurricular;

class ExtracurricularController extends Controller
{
    public function index()
    {

        $ekskul = Exctracurricular::get();
        return view('extracurricular', ['ekskulList' => $ekskul]);
    }
    public function show($id)
    {
        $ekskul = Exctracurricular::with(['student'])->
        findOrFail($id);
        return view('extracurricular-detail', ['ekskul' => $ekskul]);
    }

    public function create()
    {
        return view('extracurricular-add');
    }

    public function store(Request $request)
    {

        $ekskul = Exctracurricular::create($request->all());

        return redirect('/extracurricular');
    }
}
