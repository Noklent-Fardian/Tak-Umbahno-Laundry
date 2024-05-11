@extends ('pegawai/base');



@section('content')
<form method="POST" action="{{ route('pegawai.penyuplai.update', $data->id) }}">
  @csrf
  @method('PATCH')
  <div class="form-row">
    <div class="form-group col-md-4"> 
      <label for="nama_penyuplai">Nama</label>
      <input type="text" class="form-control" id="nama_penyuplai" name="nama_penyuplai" placeholder="Nama" autocomplete="off">
    </div>
    
    <div class="form-group col-md-2">
      <label for="no_telp_penyuplai">No Telpon</label>
        <input type="text" class="form-control" id="no_telp_penyuplai" name="no_telp_penyuplai" aria-label="No Telpon" placeholder="No Telpon" autocomplete="off">
    </div>
    <div class="form-group col-md-4">
      <label for="alamat_penyuplai">Alamat</label>
      <input type="text" class="form-control" id="alamat_penyuplai" name="alamat_penyuplai" placeholder="Alamat" autocomplete="off">
    </div>
  </div> 
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
@endsection