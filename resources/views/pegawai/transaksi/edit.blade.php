@extends ('pegawai/base');



@section('content')
    <form method="POST" action="{{ route('pegawai.transaksi.update', $data->id) }}">
        @csrf
        @method('PATCH')
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="tanggal_transaksi">Tanggal Masuk </label>
                <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" autocomplete="off"
                    visible="false" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
            </div>
            <div class="form-group col-md-4">
                <label for="pegawai_id">Nama Pegawai</label></label>
                <select class="form-control" id="pegawai_id" name="pegawai_id">
                    @foreach ($pegawai as $pegawai)
                        <option value="{{ $pegawai->id }}">{{ $pegawai->nama_pegawai }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="customer_id">Nama Customer</label></label>
                <select class="form-control" id="customer_id" name="customer_id">
                    @foreach ($customer as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->customer_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="layanan_id">Layanan</label></label>
                <select class="form-control" id="layanan_id" name="layanan_id">
                    @foreach ($layanan as $layanan)
                        <option value="{{ $layanan->id }}">{{ $layanan->nama_layanan }} - {{ $layanan->harga_layanan }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="jumlah_transaksi">Total Transaksi</label>
                <input type="number" class="form-control" id="jumlah_transaksi" name="jumlah_transaksi"
                    placeholder="Total Transaksi" autocomplete="off">
            </div>
            <div class="form-group col-md-4">
                <label for="diskon">Diskon</label>
                <input type="number" class="form-control" id="diskon" name="diskon" placeholder="Diskon"
                    autocomplete="off">
            </div>
            <div class="form-group col-md-4">
                <label for="rincian">Rincian</label>
                <textarea class="form-control" id="rincian" name="rincian" placeholder="Rincian" autocomplete="off"></textarea>
            </div>
            <div class="form-group col-md-4">
                <label for="estimasi_selesai">Estimasi Selesai</label>
                <input type="date" class="form-control" id="estimasi_selesai" name="estimasi_selesai" autocomplete="off"
                    value="{{ \Carbon\Carbon::now()->format('Y-m-d h:i') }}">
            </div>
            <div class="form-group col-md-4">
                <label for="cara_bayar_id">Metode Pembayaran</label></label>
                <select class="form-control" id="cara_bayar_id" name="cara_bayar_id">
                    @foreach ($cara_bayar as $cara_bayar)
                        <option value="{{ $cara_bayar->id }}">{{ $cara_bayar->nama_carabayar }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
@endsection
