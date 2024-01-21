@extends('layouts.Bone')
@section('title', 'Students | Delete Data')
@section('content')

    <div class="mt-5">
        <h2>Are You Sure To Delete Data : {{ $student->name }} ({{ $student->nis }})</h2>
        <form action="/student-destroy/{{ $student->id }}" style="display: inline-block" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger mt-5" type="submit">Delete</button>
        </form>
        <a href="/students" class="btn btn-primary mt-5">Cancel</a>
    </div>
@endsection
