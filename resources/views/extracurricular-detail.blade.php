@extends('layouts.Bone')
@section('title', 'Extracurricular Detail')
@section('content')
    <h2>Anda sedang melihat data dari Extracurricular {{ $ekskul->name }}</h2>

    <div class="mt-5">
        <h4>List Peserta</h4>
        <ol>
            @foreach ($ekskul->student as $item)
            <li> {{ $item->name }}</li>
            @endforeach
        </ol>
    </div>
    
@endsection
