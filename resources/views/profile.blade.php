@extends('layouts.main')

@section('content')
    <h1>HALAMAN PROFILE</h1>
    <p>Nama  : {{ $name }} </p>
    <p>NIM   : {{ $nim }}</p>
    <p>Prodi : {{ $prodi }} <p>
   <script src="{{ asset('js/alert.js') }}"></script>
@endsection