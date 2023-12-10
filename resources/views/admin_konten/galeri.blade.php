@extends('admin_layout.main')
@section('content')
<table id="example" class="table" style="width:100%">
    <a href="#" type="button" class="btn mb-5 shadow" data-bs-toggle="modal" data-bs-target="#tambah" style="background-color:#4C6687;color:white"><i class="fa-solid fa-plus" style="color: #ffffff;"></i> Tambah Galeri</a>
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>kategori</th>
            <th>Nama produk</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($galeri as $row)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td class="w-25">
                <img src="{{asset('storage/img/' . $row->gambar)}}" width="50%" alt=""> <br>
                <a href="#" type="button" class="mt-1 w-50 justify-content-center btn btn-sm btn-warning shadow" data-bs-toggle="modal" data-bs-target="#editGmbr{{$row->id_galeri}}">Ubah Gambar</a>
            </td>
            <td>
                {{$row->kategori}}
            </td>
            <td>
                {{$row->nama_produk}}
            </td>
            <td>
                {{$row->deskripsi_galeri}}
            </td>
            <td>{{$row->harga}}</td>
            <td>
                <a href="#" type="button" class="btn btn-sm btn-warning btn-primary w-50 shadow" data-bs-toggle="modal" data-bs-target="#edit{{$row->id_galeri}}"><i class="fa-regular fa-pen-to-square"></i></a>
                <a  href="#" type="button" class="mt-2 btn btn-sm btn-danger btn-primary w-50 shadow" data-bs-toggle="modal" data-bs-target="#hapus{{$row->id_galeri}}"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>

        <div class="modal fade modal-dialog-scrollable text-start" id="edit{{$row->id_galeri}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('galeri.update', $row->id_galeri)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Kategori</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="kategori" placeholder="" value="{{$row->kategori}}">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="nama_produk" placeholder="" value="{{$row->nama_produk}}">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Deskripsi</label>
                                <textarea type="text" class="form-control" id="formGroupExampleInput2" name="deskripsi_galeri" placeholder="" value="">{{$row->deskripsi_galeri}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="formGroupExampleInput2" name="harga" placeholder="" value="{{$row->harga}}">
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

        <div class="modal fade modal-dialog-scrollable text-start" id="editGmbr{{$row->id_galeri}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Ubah Gambar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('galeri.updateGambar', $row->id_galeri)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="formGroupExampleInput" name="gambar" placeholder="" value="{{$row->gambar}}">
                                <input type="hidden" value="{{$row->id_galeri}}">
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
        <div class="modal fade modal-dialog-scrollable" id="hapus{{$row->id_galeri}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Hapus Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <form action="{{route('galeri.destroy', $row->id_galeri)}}" method="POST" enctype="multipart/form-data">
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
<div class="modal fade modal-dialog-scrollable text-start" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('galeri.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="formGroupExampleInput" name="gambar" placeholder="" value="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="kategori" placeholder="" value="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="nama_produk" placeholder="" value=" ">
                    </div>
                    <div class="row gx-3 mb-3 gy-2 align-items-center">
                        <label for="formGroupExampleInput2" class="form-label">Dimensi</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <div class="input-group-text">P</div>
                                <input type="text" class="form-control" name="panjang" id="specificSizeInputGroupUsername" placeholder="Panjang(cm)">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <div class="input-group-text">L</div>
                                <input type="text" class="form-control" name="lebar" id="specificSizeInputGroupUsername" placeholder="Lebar(cm)">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <div class="input-group-text">T</div>
                                <input type="text" class="form-control" name="tinggi" id="specificSizeInputGroupUsername" placeholder="Tinggi(cm)">
                            </div>
                        </div>
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
