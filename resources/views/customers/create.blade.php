<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah Data Customer - Tak Umbahno Loundry</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <!-- Form untuk membuat customer baru -->
                        <form action="{{ route('customers.store') }}" method="POST">
                            @csrf

                            <!-- Input Nama -->
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Customer</label>
                                <input type="text" class="form-control @error('customer_nama') is-invalid @enderror"
                                    name="customer_nama" value="{{ old('customer_nama') }}"
                                    placeholder="Masukkan Nama Customer">

                                <!-- Pesan error untuk customer_nama -->
                                @error('customer_nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Input No Telepon -->
                            <div class="form-group">
                                <label class="font-weight-bold">No Telepon</label>
                                <input type="text" class="form-control @error('customer_noTelp') is-invalid @enderror"
                                    name="customer_noTelp" value="{{ old('customer_noTelp') }}"
                                    placeholder="Masukkan No Telepon Customer">

                                <!-- Pesan error untuk customer_noTelp -->
                                @error('customer_noTelp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Input Alamat -->
                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <textarea class="form-control @error('customer_alamat') is-invalid @enderror"
                                    name="customer_alamat" rows="3"
                                    placeholder="Masukkan Alamat Customer">{{ old('customer_alamat') }}</textarea>

                                <!-- Pesan error untuk customer_alamat -->
                                @error('customer_alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Pilihan Pengguna Terkait -->
                            <div class="form-group">
                                <label class="font-weight-bold">Pengguna Terkait</label>
                                <select class="form-control @error('user_id') is-invalid @enderror" name="user_id">
                                    <option value="">Pilih Pengguna</option>
                                    <!-- Daftar pengguna -->
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>

                                <!-- Pesan error untuk user_id -->
                                @error('user_id')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Pilihan Jenis Member -->
                            <div class="form-group">
                                <label for="jenis_member_id">Jenis Member:</label>
                                <select name="jenis_member_id" id="jenis_member_id"
                                    class="form-control @error('jenis_member_id') is-invalid @enderror">
                                    <option value="">Pilih Jenis Member</option>
                                    @foreach($jenisMembers as $jenisMember)
                                        <option value="{{ $jenisMember->id }}" {{ old('jenis_member_id') == $jenisMember->id ? 'selected' : '' }}>
                                            {{ $jenisMember->nama_jenisMember }} <!-- Gunakan kolom 'nama_jenisMember' -->
                                        </option>
                                    @endforeach
                                </select>
                                @error('jenis_member_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>