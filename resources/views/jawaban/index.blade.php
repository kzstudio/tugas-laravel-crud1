
@extends('layout/master')

@section('bradcumb-awal')
<a href="#">Jawaban</a>
@endsection

@section('content')
<div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">Judul : {{$pertanyaan->judul}}</h3>
    </div> <!-- /.card-body -->
    <div class="card-body">
        <p>Isi : {{$pertanyaan->isi}}
        </p>
        <hr>
        <div class="timeline">
            <div class="time-label">
                <span class="bg-green">Jawaban</span>
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
        <a href="{{url('/pertanyaan')}}" class='btn btn-danger'>Kembali</a>
        </form>
    </div>
</div>

@endsection