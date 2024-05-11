@extends ('pegawai/base');



@section('content')
<form method="POST" action="{{ route('pegawai.jenismember.update', $data->id) }}">
  @csrf
  @method('PATCH')
  <div class="form-row">
    <div class="form-group col-md-4"> 
      <label for="nama_jenisMember">Nama</label>
      <input type="text" class="form-control" id="nama_jenisMember" name="nama_jenisMember" placeholder="Nama" autocomplete="off">
    </div>
  </div> 
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
@endsection