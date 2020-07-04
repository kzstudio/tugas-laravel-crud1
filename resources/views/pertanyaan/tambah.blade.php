
@extends('layout/master')

@section('bradcumb-awal')
<a href="#">Tambah Pertanyaan</a>
@endsection

@section('content')
<form action="{{url('/pertanyaan')}}" method="POST">
@csrf
@include('pertanyaan.form')
</form>
@endsection