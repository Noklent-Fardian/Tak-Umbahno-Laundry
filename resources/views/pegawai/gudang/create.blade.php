@extends ('pegawai/base');

@section('content')
<form method="POST" action="{{ route('pegawai.gudang.store') }}">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-4"> 
      <label for="nama_barang">Nama Barang</label>
      <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="nama barang" autocomplete="off">
    </div>
    
    <div class="form-group col-md-2">
      <label for="stok_barang">Stock Tersedia</label>
        <input type="number" class="form-control" id="stok_barang" name="stok_barang" aria-label="stok_barang" placeholder="Stock Barang" autocomplete="off">
    </div>
    <div class="form-group col-md-4">
      <label for="satuan_barang">Satuan Jenis Barang</label></label>
      <select class="form-control" id="satuan_barang" name="satuan_barang">
        <option value="kg">Kg</option>
        <option value="pcs">Pcs</option>
        <option value="box">Box</option>
        <option value="botol">Botol</option>
        <option value="pack">Pack</option>
        <option value="lembar">Lembar</option>
        <option value="roll">Roll</option>
        <option value="unit">Unit</option>
      </select>
    </div>
  </div> 
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection