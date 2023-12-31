@extends('admin_layout.main')
@section('content')

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mb-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Kelola Custom Produk</li>
        <li class="breadcrumb-item active" aria-current="page">Kelola Pengiriman</li>
    </ol>
</nav>

<a href="#" type="button" class="p-2 text-decoration-none fw-bolder rounded-top shadow" data-bs-toggle="modal" data-bs-target="#tambah" style="background-color:#4C6687;color:white"><i class="fa-solid fa-plus" style="color: #ffffff;"></i> Tambah Pengiriman</a>
<div class="tbl shadow p-3 rounded">
    <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Pengiriman</th>
                <th>Ongkos Pengiriman</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($pengiriman as $row)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$row->jenisPengiriman}}</td>
                <td>Rp. {{$row->biayaPengiriman}}</td>
                <td>
                    <a href="#" type="button" class="btn btn-sm btn-success btn-primary w-50" data-bs-toggle="modal" data-bs-target="#updatePengiriman{{$row->idPengiriman}}">Update Harga</a>
                    <a  href="#" type="button" class="mt-2 btn btn-sm btn-danger btn-primary w-50 shadow" data-bs-toggle="modal" data-bs-target="#hapus{{$row->idPengiriman}}"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            <div class="modal fade modal-dialog-scrollable text-start" id="updatePengiriman{{$row->idPengiriman}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="staticBackdropLabel">Update Pengiriman</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('pengiriman.update', $row->idPengiriman)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label fw-bolder">jenis Pengiriman</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput2" name="jenisPengiriman" placeholder="" value="{{$row->jenisPengiriman}}">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label fw-bolder">Ongkos Pengiriman</label>
                                    <div class="input-group">
                                        <div class="input-group-text">Rp</div>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" name="biayaPengiriman" placeholder="" value="{{$row->biayaPengiriman}}">
                                    </div>
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
            <div class="modal fade modal-dialog-scrollable" id="hapus{{$row->idPengiriman}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Hapus Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <form action="{{route('pengiriman.destroy',$row->idPengiriman)}}" method="POST" enctype="multipart/form-data">
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
            @endforeach
            @if(session('success'))
                <div class="alert alert-success mb-2 alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close text-end" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </tbody>
    </table>
</div>

<div class="modal fade modal-dialog-scrollable text-start" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Pengiriman</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('pengiriman.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label fw-bolder">Jenis Pengiriman</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="jenisPengiriman" placeholder="" value="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label fw-bolder">Ongkos Pengiriman</label>
                        <div class="input-group">
                            <div class="input-group-text">Rp</div>
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="biayaPengiriman" placeholder="" value="">
                        </div>
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
