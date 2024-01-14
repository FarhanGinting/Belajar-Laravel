@extends('layouts.Bone')
@section('title', 'Student')
@section('content')
    <h1>ini halaman student</h1>
    {{-- <p>
        {{ $studentList }}
    </p> --}}

    <h3>Student List
        <ol>
            @foreach ($studentList as $data)
                <li>
                    {{ $data->name }} | {{ $data->gender }} | {{ $data->nis }}
                </li>
            @endforeach
        </ol>
    </h3>
@endsection
