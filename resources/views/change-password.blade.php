@extends('layouts.Bone')
@section('title', 'User | Change password')
@section('content')

    <div class="mt-5 col-8 m-auto">
        @if (Session::has('status'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif
        <form action="change-password" method="POST">
            @csrf

            <div class="mb-3">
                <label for="oldPassword">Old Password</label>
                <input type="password" class="form-control" name="old_password" id="oldPassword">
            </div>
            <div class="mb-3">
                <label for="newPassword">New Password</label>
                <input type="password" class="form-control" name="new_Password" id="newPassword">
            </div>
            <div class="mb-3">
                <label for="repeatPassword">Repeat Password</label>
                <input type="password" class="form-control" name="repeat_Password" id="repeatPassword">
            </div>

            <div class="mb-3">
                <button class="btn btn-success mt-3 " type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
