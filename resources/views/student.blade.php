@extends('layouts.Bone')
@section('title', 'Student')
@section('content')
    <h1>ini halaman student</h1>
    {{-- <p>
        {{ $studentList }}
    </p> --}}

    <h3>Student List
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>NIS</th>
                    <th>Class ID</th>
                    <th>Claass</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($studentList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->gender }}</td>
                     <td>{{ $data->nis }}</td>
                    <td>{{ $data->class['name'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </h3>
@endsection
