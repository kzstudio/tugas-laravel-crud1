
@extends('layout/master')

@section('bradcumb-awal')
<a href="#">Pertanyaan</a>
@endsection

@section('content')
judul, isi, tanggal_dibuat , tanggal_dibuat, tanggal_diperbaharui,

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
      <th>Action</th>
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
      <td>
        <a href='{{url("/pertanyaan/".$val->id."")}}' class="btn btn-info">Lihat</a>
        <a href='{{url("/pertanyaan/".$val->id."/edit")}}' class="btn btn-primary">Ubah</a>
        <form action="{{url('/pertanyaan/'.$val->id)}}" method="POST" style="display:inline;">
          @csrf
          @method("DELETE")
          <button type="submit" value="hapus" class="btn btn-danger">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

