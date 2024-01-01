@extends('admin_layout.main')
@section('content')

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mb-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Kelola Custom Barang</li>
        <li class="breadcrumb-item active" aria-current="page">Pesanan Baru</li>
    </ol>
</nav>
<table id="example" class="table" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Besi</th>
            <th>Stainless Steel</th>
            <th>Alumunium</th>
            <th>Baja</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($bahan as $row)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$row->besi}}</td>
            <td>{{$row->stainless_steel}}</td>
            <td>{{$row->alumunium}}</td>
            <td>{{$row->baja_ringan}}</td>
            <td>
                <a href="#" type="button" class="btn btn-sm btn-success btn-primary w-50" data-bs-toggle="modal" data-bs-target="#update">Update Harga</a>
            </td>
        </tr>
        <div class="modal fade modal-dialog-scrollable text-start" id="update" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold" id="staticBackdropLabel">Update Harga</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('bahan.update', $row->idBahan)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label fw-bolder">Harga Besi</label>
                                <div class="input-group">
                                    <div class="input-group-text">Rp</div>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" name="besi" placeholder="" value="{{$row->besi}}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label fw-bolder">Harga Stainless Steel</label>
                                <div class="input-group">
                                    <div class="input-group-text">Rp</div>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" name="stainless_steel" placeholder="" value="{{$row->stainless_steel}}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label fw-bolder">Harga Alumunium</label>
                                <div class="input-group">
                                    <div class="input-group-text">Rp</div>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" name="alumunium" placeholder="" value="{{$row->alumunium}}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label fw-bolder">Harga Baja Ringan</label>
                                <div class="input-group">
                                    <div class="input-group-text">Rp</div>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" name="baja_ringan" placeholder="" value="{{$row->baja_ringan}}">
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
            <div class="alert alert-success mb-2 alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close text-end" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @endforeach
    </tbody>
</table>
@endsection
