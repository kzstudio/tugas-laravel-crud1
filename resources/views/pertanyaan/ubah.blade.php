
@extends('layout/master')

@section('bradcumb-awal')
<a href="#">Ubah Pertanyaan</a>
@endsection

@section('content')
<form action="{{url('/pertanyaan/'.$data->pertanyaan_id)}}" method="POST">
@csrf
@method('PUT')
@include('pertanyaan.form')
</form>
@endsection