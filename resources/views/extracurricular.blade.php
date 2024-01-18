@extends('layouts.Bone')
@section('title', 'Extracurricular')
@section('content')
    <h1>ini halaman Exctracurricular</h1>
    {{-- <p>
        {{ $studentList }}
    </p> --}}

    <h3>Exctracurricular List </h3>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Anggota</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ekskulList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        @foreach ($data->student as $item)
                            - {{ $item->name }}
                            <br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
