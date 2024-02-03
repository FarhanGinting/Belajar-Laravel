@extends('layouts.Bone')
@section('title', 'Home')
@section('content')

        <h1>Ini Halaman Home</h1>
        <h2>Selamat Datang {{ Auth::user()->name }} ada adalah  {{ Auth::user()->role->name}}</h2>

       <x-alert message='ini adalah halaman home' type='primary' />

       

        {{-- @if ($role == 'admin')
            <a href="">Ke halaman Admin</a>
            @elseif ($role == 'staff')
            <a href="">Ke halaman Gudang</a>
            @else
            <a href="">Ke Halaman Apapun</a>
        @endif --}}

        {{-- @switch($role)
            @case($role == 'admin')
                <a href="">Ke halaman Admin</a>
                @break
            @case($role == 'staff')
                <a href="">Ke halaman Gudang</a>
            @break
            @default
            <a href="">Ke halaman Apapun</a>
                
        @endswitch --}}

        {{-- @for ($i = 0; $i < 5; $i++)
            {{ $i }} <br>
        @endfor --}}

{{-- 
        <table class="table">
            <tr>
                <th>No.</th>
                <th>Nama</th>
            </tr>
            @foreach ($buah as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data }}</td>
                </tr>
            @endforeach
        </table> --}}
        
@endsection