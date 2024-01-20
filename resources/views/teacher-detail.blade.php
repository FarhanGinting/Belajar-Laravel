@extends('layouts.Bone')
@section('title', 'Teacher Detail')
@section('content')
    <h2>Anda sedang melihat data dari guru yang bernama {{ $teacher->name }}</h2>

    <div class="mt-5">
        <h4>Wali Kelas Dari :
            @if ($teacher->class)
                {{ $teacher->class->name }}
            @else
                -
            @endif
        </h4>
    </div>

    <div class="mt-5">
        <h4>List Student</h4>
        <ol>
            @if ($teacher->class)
                @foreach ($teacher->class->students as $item)
                    <li>{{ $item->name }}</li>
                @endforeach
            @else
            -
            @endif
        </ol>
    </div>
@endsection
