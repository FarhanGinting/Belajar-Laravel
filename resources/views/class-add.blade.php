@extends('layouts.Bone')
@section('title', 'Class | Add New')
@section('content')
<div class="mt-5 col-8 m-auto">
    <form action="class-store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="mb-3">
            <label for="teacher">Teacher</label>
            <select name="teacher_id" id="teacher" class="form-control" required>
                <option value="">Select One</option>
                @foreach ($teacher as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button class="btn btn-success mt-3 " type="submit">Save</button>
        </div>
    </form>
</div>
@endsection
