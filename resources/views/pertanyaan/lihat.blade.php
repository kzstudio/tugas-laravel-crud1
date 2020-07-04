
@extends('layout/master')

@section('bradcumb-awal')
<a href="#">Pertanyaan</a>
@endsection

@section('content')
<div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">Detail Pertanyaan</h3>
    </div> <!-- /.card-body -->
    <div class="card-body">
        <table>
            <tr>
                <th>Judul</th>
                <td>:</td>
                <td>{{$data->judul}}</td>
            </tr>
            <tr>
                <th>Isi</th>
                <td>:</td>
                <td>{{$data->isi}}</td>
            </tr>
            <tr>
                <th>Tanggal Dibuat</th>
                <td>:</td>
                <td>{{$data->tanggal_dibuat}}</td>
            </tr>
            <tr>
                <th>Tanggal Diperbaharui</th>
                <td>:</td>
                <td>{{$data->tanggal_diperbaharui}}</td>
            </tr>
            <tr>
                <th style="vertical-align:top;">
                    Jawaban
                </th>
                <td>:</td>
                <td>
                      <?php 
                            if ($jawab->count() > 0){ ?>
                    <div class="timeline">
                        <div class="time-label">

                            </div>
                          
                                @foreach($jawab as $key => $val)
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
  <?php } ?>
                </td>
            </tr>
        </table>
        
        <a href="{{url('/pertanyaan')}}" class='btn btn-danger'>Kembali</a>
    </div>
</div>



@endsection

