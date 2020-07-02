
@extends('layout/master')

@section('bradcumb-awal')
<a href="#">Tambah Pertanyaan</a>
@endsection

@section('content')
<form action="{{url('/pertanyaan')}}" method="POST">
@csrf
<div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" id="judul" name="judul" placeholder="judul" required>
</div>
<div class="form-group">
    <label for="isi">Isi</label>
    <input type="text" class="form-control" id="isi" name="isi" placeholder="Isi" required>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection