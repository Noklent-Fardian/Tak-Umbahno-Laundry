@extends ('pegawai/base');

@section('content')
<form method="POST" action="{{ route('pegawai.jenismember.store') }}">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-4"> 
      <label for="nama_jenisMember">Nama</label>
      <input type="text" class="form-control" id="nama_jenisMember" name="nama_jenisMember" placeholder="Nama" autocomplete="off">
    </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection