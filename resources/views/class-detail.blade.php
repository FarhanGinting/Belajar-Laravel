@extends('layouts.Bone')
@section('title', 'Class Detail')
@section('content')
<h2>Anda sedang melihat data dari kelas {{ $class->name }}</h2>

<div class="mt-5">
    <h4>Homeroom Teacher :  {{ $class->homeroomTeacher->name }}</h4>
</div>

<div class="mt-5">
    <h4>List Students
        <ol>
            @foreach ($class->students as $item)
              <li>  {{ $item->name }}</li> 
            @endforeach
        </ol>
    </h4>
</div>


@endsection
