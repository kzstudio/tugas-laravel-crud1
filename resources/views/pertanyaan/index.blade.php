
@extends('layout/master')

@section('bradcumb-awal')
<a href="#">Pertanyaan</a>
@endsection

@section('content')

<a href="{{url('/pertanyaan/create')}}" class='btn btn-primary'>Tambah</a><br><br>
<table class="table table-bordered">
  <thead>                  
    <tr>
      <th style="width: 10px">No</th>
      <th>Judul</th>
      <th>Isi</th>
      <th>Jawaban</th>
      <th>Like</th>
      <th>Dislike</th>
      <th>Vote</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $key => $val)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$val->judul}}</td>
      <td>{{$val->isi}}</td>
      <td><a href="{{url('/jawaban/'.$val->id)}}" class="btn btn-danger">Jawab</a></td>
      <td>{{$val->jumlah_like}}</td>
      <td>{{$val->jumlah_dislike}}</td>
      <td>{{$val->vote}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection