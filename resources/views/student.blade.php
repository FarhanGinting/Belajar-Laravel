@extends('layouts.Bone')
@section('title', 'Students')
@section('content')
    <h1>ini halaman student</h1>
    {{-- <p>
        {{ $studentList }}
    </p> --}}


    <div class="my-5 d-flex justify-content-between">
        <a href="student-add" class="btn btn-primary">Add Data</a>
        <a href="students-showdeleted" class="btn btn-info">Show Delete Data</a>
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <h3>Student List</h3>
    <div class="my-3 col-12 col-sm-8 col-md-5">
        <form action="" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="Search">
                <button class="input-group-text btn btn-warning">🔍</button>
            </div>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>Class</th>
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
                    <td>{{ $data->class->name }}</td>
                    <td>
                        <a href="student-detail/{{ $data->id }}">Detail</a>
                        |
                        <a href="student-edit/{{ $data->id }}"> Edit</a>
                        |
                        <a href="student-delete/{{ $data->id }}"> Delete</a>
                    </td>
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
    <div class="my-5">
        {{ $studentList->withQueryString()->links() }}
    </div>

@endsection
