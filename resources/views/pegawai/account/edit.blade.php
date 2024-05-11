@extends ('pegawai/base');



@section('content')
    <form method="POST" action="{{ route('pegawai.account.update', $data->id) }}">
        @csrf
        @method('PATCH')
        <div class="form-row">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="name">User Name </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="username"
                        autocomplete="off" value={{ $data->name }}>
                </div>
                <div class="form-group col-md-4">
                    <label for="role">Role</label></label>
                    <select class="form-control" id="role" name="role">
                        <option value="Pegawai">Pegawai</option>
                        <option value="Pembeli">Pembeli</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="no_hp">Nomor telepon</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Hp"
                        autocomplete="off" value={{ $data->no_hp }}>
                </div>
                <div class="form-group col-md-4">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email"
                        autocomplete="off" value={{ $data->email }}>
                </div>
                <div class="form-group col-md-4">
                    <label for="password">Password </label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="password"
                        autocomplete="off">
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
