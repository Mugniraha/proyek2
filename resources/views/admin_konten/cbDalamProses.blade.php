@extends('admin_layout.main')
@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mb-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Kelola Custom Barang</li>
        <li class="breadcrumb-item active" aria-current="page">Dalam Proses</li>
    </ol>
</nav>
<table id="example" class="table" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Detail Pesanan</th>
            <th>Detail Pemesan</th>
            <th>Metode Pengiriman</th>
            <th>Tanggal pemesanan</th>
            <th>Progres</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>00102</td>
            <td>Rama</td>
            <td>Ambil Ditempat</td>
            <td>2011-04-25</td>
            <td>
                <a href="#" type="button" class="btn btn-sm btn-success btn-primary w-50" data-bs-toggle="modal" data-bs-target="#edit">Input Progres</a>
            </td>
        </tr>
        <div class="modal fade modal-dialog-scrollable text-start" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Input Progres</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option name="statusPesanan" selected>Input Progres</option>
                                    <option value="25">25%</option>
                                    <option value="50">50%</option>
                                    <option value="75">75%</option>
                                    <option value="100">100%</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Keterangan</option>
                                    <option value="1">Bahan sedang dibeli</option>
                                    <option value="2">50%</option>
                                    <option value="3">75%</option>
                                    <option value="3">100%</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="formGroupExampleInput" name="gambar" placeholder="" value="">
                                <input type="hidden" value="">
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
