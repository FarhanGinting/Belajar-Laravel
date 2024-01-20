@extends('layouts.Bone')
@section('title', 'Students')
@section('content')
    <h1>ini halaman student</h1>
    {{-- <p>
        {{ $studentList }}
    </p> --}}

    <h3>Student List</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>NIS</th>
                    <th>Action</th>
                    {{-- <th>Class ID</th>
                    <th>Extracurricular</th>
                    <th>Homeroom Teacher</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($studentList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->gender }}</td>
                     <td>{{ $data->nis }}</td>
                     <td><a href="student-detail/{{ $data->id }}">Detail</a></td>
                    {{-- <td>{{ $data->class['name'] }}</td>
                    <td>
                        @foreach ($data->extracurriculars as $item)
                            - {{ $item->name }} <br>
                        @endforeach
                    </td>
                    <td>{{ $data->class->homeroomTeacher->name }}</td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
        
    
@endsection
