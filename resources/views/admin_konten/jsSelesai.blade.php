@extends('admin_layout.main')
@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mb-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Kelola Jasa Service</li>
        <li class="breadcrumb-item active" aria-current="page">selesai</li>
    </ol>
</nav>
<table id="example" class="table" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama customer</th>
            <th>Detail pesanan</th>
            <th>status</th>
            <th>Ulasan</th>
        </tr>
    </thead>
    @php
        $nomor = 1;
    @endphp

    <tbody>
    @foreach ($jasaServis as $row)
        <tr>
            <td>{{$nomor++}}</td>
            <td>{{$row->nama}}</td>
            <td></td>
            <td>
                @if($row->status === 'Selesai')
                <a href="" class="btn btn-sm btn-success w-75" disabled>Selesai</a>
                @elseif ($row->status === 'ditolak')
                <a href="" class="btn btn-sm btn-danger w-75" disabled>Ditolak</a>
                @else
                @endif
            </td>
            <td>
                @if($row->status === 'Selesai')
                    <a href="" class="btn btn-sm  w-75 text-white" style="background-color:#4C6687;" data-bs-toggle="modal" data-bs-target="#ulasan">Balas Ulasan</a>
                @elseif($row->status === 'ditolak')
                    <button class="btn btn-sm w-75 text-white" style="background-color:#4C6687;" disabled>Balas Ulasan</button>
                @else
                @endif
            </td>
        </tr>
        @if(session('success'))
                <div class="alert alert-success mb-2">
                    {{ session('success') }}
                </div>
        @endif
    @endforeach
    </tbody>
</table>
<div class="modal fade modal-dialog-scrollable text-start" id="ulasan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
