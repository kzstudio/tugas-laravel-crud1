<div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" id="judul" value="{{isset($data)?$data->judul:''}}" name="judul" placeholder="judul" required>
</div>
<div class="form-group">
    <label for="isi">Isi</label>
    <input type="text" class="form-control" id="isi" name="isi" value="{{isset($data)?$data->isi:''}}" placeholder="Isi" required>
</div>
<button type="submit" class="btn btn-primary">Submit</button><a href="{{url('/pertanyaan')}}" class='btn btn-danger'>Kembali</a>