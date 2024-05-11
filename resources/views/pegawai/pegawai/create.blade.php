@extends ('pegawai/base');

@section('content')
    <form method="POST" action="{{ route('pegawai.pegawai.store') }}">
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
                <label for="nama_pegawai">Nama Pegawai </label>
                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Nama Pegawai"
                    autocomplete="off">
            </div>
            <div class="form-group col-md-4">
                <label for="alamat_pegawai">Alamat</label>
                <input type="text" class="form-control" id="alamat_pegawai" name="alamat_pegawai" placeholder="Alamat"
                    autocomplete="off">
            </div>
            <div class="form-group col-md-4">
                <label for="no_telp_pegawai">No Telp </label>
                <input type="text" class="form-control" id="no_telp_pegawai" name="no_telp_pegawai" placeholder="No Telp"
                    autocomplete="off">
            </div>
            <div class="form-group col-md-4">
                <label for="email_pegawai">Email </label>
                <input type="email" class="form-control" id="email_pegawai" name="email_pegawai" placeholder="Email"
                    autocomplete="off">
            </div>
            <div class="form-group col-md-4">
                <label for="user_id">User</label></label>
                <select class="form-control" id="user_id" name="user_id">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
    </form>
@endsection
