@extends('admin_layout.main')
@section('content')
<table id="example" class="table table-striped mb-5" style="width:100%">
    <a href="#" type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#tambah"><i class="fa-solid fa-plus" style="color: #ffffff;"></i> Buat Profil</a>
    <thead>
        <tr>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>
                <a href="#" type="button" class="btn btn-sm btn-warning btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                <br>
                <a  href="#" type="button" class="mt-2 btn btn-sm btn-danger btn-primary" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash"></i> Hapus</a></td>
        </tr>
        <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>
                <a href="#" type="button" class="btn btn-sm btn-warning btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                <br>
                <a  href="#" type="button" class="mt-2 btn btn-sm btn-danger btn-primary" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash"></i> Hapus</a>
            </td>
        </tr>
        <tr>
            <td>Ashton Cox</td>
            <td>Junior Technical Author</td>
            <td>San Francisco</td>
            <td>
                <a href="#" type="button" class="btn btn-sm btn-warning btn-primary w-75" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                <br>
                <a  href="#" type="button" class="mt-2 btn btn-sm btn-danger btn-primary w-75" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash"></i> Hapus</a>
            </td>
        </tr>
        <tr>
            <td>Cedric Kelly</td>
            <td>Senior Javascript Developer</td>
            <td>Edinburgh</td>
            <td>
                <a href="#" type="button" class="btn btn-sm btn-warning btn-primary w-75" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                <br>
                <a  href="#" type="button" class="mt-2 btn btn-sm btn-danger btn-primary w-75" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash"></i> Hapus</a>
            </td>
        </tr>
        <tr>
            <td>Airi Satou</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>
                <a href="#" type="button" class="btn btn-sm btn-warning btn-primary w-75" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa-regular fa-pen-to-square"></i></a>
                <br>
                <a  href="#" type="button" class="mt-2 btn btn-sm btn-danger btn-primary w-75" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        <tr>
            <td>Brielle Williamson</td>
            <td>Integration Specialist</td>
            <td>New York</td>
            <td>
                <a href="#" type="button" class="btn btn-sm btn-warning btn-primary w-75" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                <br>
                <a  href="#" type="button" class="mt-2 btn btn-sm btn-danger btn-primary w-75" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash"></i> Hapus</a>
            </td>
        </tr>
        <tr>
            <td>Herrod Chandler</td>
            <td>Sales Assistant</td>
            <td>San Francisco</td>
            <td>
                <a href="#" type="button" class="btn btn-sm btn-warning btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                <br>
                <a  href="#" type="button" class="mt-2 btn btn-sm btn-danger btn-primary" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash"></i> Hapus</a>
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
                        <form action="" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Gambar</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="gambar" placeholder="" value="">
                                <input type="hidden" value="">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Deskripsi</label>
                                <textarea type="number" class="form-control" id="formGroupExampleInput2" name="deskripsi" placeholder="" value=""></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Harga</label>
                                <input type="email" class="form-control" id="formGroupExampleInput2" name="harga" placeholder="" value="">
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
                        <form action="#" method="POST">
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
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Gambar</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="gambar" placeholder="" value="">
                        <input type="hidden" value="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Deskripsi</label>
                        <textarea type="number" class="form-control" id="formGroupExampleInput2" name="deskripsi" placeholder="" value=""></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Harga</label>
                        <input type="email" class="form-control" id="formGroupExampleInput2" name="harga" placeholder="" value="">
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