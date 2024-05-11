@extends ('pegawai/base');

@section('content')
    <form method="POST" action="{{ route('pegawai.layanan.store') }}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nama_layanan">Nama Layanan</label>
                <input type="text" class="form-control" id="nama_layanan" name="nama_layanan" placeholder="nama layanan"
                    autocomplete="off">
            </div>
            <div class="form-group col-md-4">
                <label for="harga_layanan">Harga</label>
                <input type="text" class="form-control" id="harga_layanan" name="harga_layanan" placeholder="Harga "
                    autocomplete="off">
            </div>
            <div class="form-group col-md-4">
                <label for="jenis_satuan">Satuan Jenis Barang</label></label>
                <select class="form-control" id="jenis_satuan" name="jenis_satuan">
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
            <div class="form-group col-md-4">
                <label for="deskripsi_layanan">Deskripsi Layanan</label>
                <textarea class="form-control" id="deskripsi_layanan" name="deskripsi_layanan" placeholder="Deskripsi"
                    autocomplete="off"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
