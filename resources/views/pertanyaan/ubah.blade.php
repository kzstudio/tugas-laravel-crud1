
@extends('layout/master')

@section('bradcumb-awal')
<a href="#">Ubah Pertanyaan</a>
@endsection

@section('content')
<div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">Ubah Pertanyaan</h3>
    </div> <!-- /.card-body -->
    <div class="card-body">
        <form action="{{url('/pertanyaan/'.$data->id)}}" method="POST">
        @csrf
        @method('PUT')
        @include('pertanyaan.form')
        </form>
    </div>
</div>
@endsection