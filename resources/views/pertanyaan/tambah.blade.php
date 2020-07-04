
@extends('layout/master')

@section('bradcumb-awal')
<a href="#">Tambah Pertanyaan</a>
@endsection

@section('content')
<div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">Tambah Pertanyaan</h3>
    </div> <!-- /.card-body -->
    <div class="card-body">
        <form action="{{url('/pertanyaan')}}" method="POST">
        @csrf
        @include('pertanyaan.form')
        </form>
    </div>
</div>
@endsection