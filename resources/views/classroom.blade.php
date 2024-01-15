@extends('layouts.Bone')
@section('title', 'ClassRoom')
@section('content')
    <h1>ini halaman class</h1>
    {{-- <p>
        {{ $studentList }}
    </p> --}}

    <h3>class List
        {{-- <ol>
            @foreach ($studentList as $data)
                <li>
                    {{ $data->name }} | {{ $data->gender }} | {{ $data->nis }}
                </li>
            @endforeach
        </ol> --}}
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Students</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        @foreach ($data->students as $student)
                            - {{ $student['name']}} <br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
