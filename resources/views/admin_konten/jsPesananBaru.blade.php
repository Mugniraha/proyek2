@extends('admin_layout.main')
@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mb-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Kelola Jasa Service</li>
        <li class="breadcrumb-item active" aria-current="page">Pesanan Baru</li>
    </ol>
</nav>
<table id="example" class="table" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama customer</th>
            <th>jenis Kerusakan</th>
            <th>Deskripsi kerusakan</th>
            <th>Alamat</th>
            <th>Tanggal pemesanan</th>
            <th>Tanggal pengerjaan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    @foreach ($jasaServis as $row)

    <tbody>

        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->jenisJasa}}</td>
            <td>{{$row->deskripsi}}</td>
            <td>{{$row->alamat}}</td>
            <td>{{ ($row->created_at) }}</td>

            <td></td>
            <td>
                <a href="#" type="button" class="btn btn-sm btn-success btn-primary w-75" data-bs-toggle="modal" data-bs-target="#edit">Terima</a>
                <a  href="#" type="button" class="mt-2 btn btn-sm btn-danger btn-primary w-75" data-bs-toggle="modal" data-bs-target="#hapus">Tolak</a>
            </td>
        </tr>

        <div class="modal fade modal-dialog-scrollable text-start" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="formGroupExampleInput" name="gambar" placeholder="" value="">
                                <input type="hidden" value="">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Deskripsi</label>
                                <textarea type="number" class="form-control" id="formGroupExampleInput2" name="deskripsi_galeri" placeholder="" value=""></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="formGroupExampleInput2" name="harga" placeholder="" value="">
                            </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal untuk hapus data --}}
        <div class="modal fade modal-dialog-scrollable" id="hapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Hapus Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                <h3>YAKIN INGIN MENGHAPUS DATA?!</h3>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        @if(session('success'))
                <div class="alert alert-success mb-2">
                    {{ session('success') }}
                </div>
        @endif
    </tbody>
    @endforeach
</table>
<div class="modal fade modal-dialog-scrollable text-start" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="formGroupExampleInput" name="gambar" placeholder="" value="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Deskripsi</label>
                        <textarea type="number" class="form-control" id="formGroupExampleInput2" name="deskripsi_galeri" placeholder="" value=""></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="formGroupExampleInput2" name="harga" placeholder="" value="">
                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
