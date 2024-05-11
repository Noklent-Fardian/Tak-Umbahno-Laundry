@extends ('pegawai/base');

@section('js')
    @foreach ($data as $item)
        <script>
            $('#btn-delete-{{ $item->id }}').click((e) => {
                e.preventDefault();
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this record.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $('#delete-form-{{ $item->id }}').submit();
                        } else {
                            swal({
                                title: "Your record is save.",
                                icon: "success",
                            });
                        }
                    });
            });
        </script>
    @endforeach
    <script>
        $("#search-toggle").click((e) => {
            e.preventDefault();
            $('#form-search').submit();
        })
    </script>
@endsection


@section('page_css')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/datasTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengguna</h6>
            <a href="{{ route('pegawai.pegawai.create') }}" class="btn btn-primary btn-icon-split btn-sm">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Daftar Pegawai</span>
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                    style="text-align:center;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID </th>
                            <th>Nama </th>
                            <th>Alamat</th>
                            <th>No_telp</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $pegawai)
                            <tr>

                                <td class="text-center"> {{ $loop->index + 1 }}</td>
                                <td style="width:10%">{{ $pegawai->id }}</td>
                                <td>{{ $pegawai->nama_pegawai }}</td>
                                <td>{{ $pegawai->alamat_pegawai }}</td>
                                <td>{{ $pegawai->no_telp_pegawai }}</td>
                                <td>{{ $pegawai->email_pegawai }}</td>
                                <td>{{ $pegawai->user->name }}</td>
                                <td style="width:20%">
                                    <a href="{{ route('pegawai.pegawai.edit', $pegawai->id) }}"
                                        class="btn btn-primary btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-pen"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-icon-split btn-sm" data-toggle="modal"
                                        data-target="#deleteModal" data-id="{{ $pegawai->id }}">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus Data Pegawai Ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <form id="deleteForm" method="POST" action="{{ route('pegawai.pegawai.delete', $pegawai->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_script')
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endsection
