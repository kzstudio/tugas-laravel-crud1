
@extends('layout/master')

@section('bradcumb-awal')
<a href="#">Jawaban</a>
@endsection

@section('content')

<a href="{{url('/pertanyaan')}}" class='btn btn-danger'>Kembali</a><br><br>
<div class="timeline">
<div class="time-label">

<span class="bg-red">Pertanyaan : {{$pertanyaan->judul.' - '.$pertanyaan->isi}}</span>
    </div>
    @foreach($data as $key => $val)
    <!-- timeline item -->
    <div>
        <i class="fas fa-envelope  bg-green"></i>
        <div class="timeline-item">
            <h3 class="timeline-header no-border">{{$val->isi}}</h3>
        </div>
    </div>
    <!-- END timeline item -->
    @endforeach                     
</div>
   
<form action="{{url('/jawaban/'.$pertanyaanId)}}" method="POST">
@csrf
<div class="form-group">
    <label for="judul">Jawab</label>
    <input type="text" class="form-control" id="isi" name="isi" placeholder="isi" required>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection