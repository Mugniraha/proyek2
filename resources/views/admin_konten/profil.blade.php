@extends('admin_layout.main')
@section('content')
<div class="konten col py-3 p-5">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dashboard Admin</li>
            <li class="breadcrumb-item active" aria-current="page">Profil</li>
        </ol>
    </nav>
    <a href="#" type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#buat"><i class="fa-solid fa-plus" style="color: #ffffff;"></i> Buat Profil</a>
    <div class="container rounded p-5" style="background-color: #F7F6F4">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <img src="{{asset('img/logo.png')}}" alt="" class="rounded-circle ">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 p-2">
                NAMA
            </div>
            <div class="col-md-8 bg-light p-3 text-dark rounded">
                Mohamad Mughni Rahadiansyah
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-md-4 p-2">
                NOMOR TELEPON
            </div>
            <div class="col-md-8 bg-light p-3 text-dark rounded">
                Mohamad Mughni Rahadiansyah
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-md-4 p-2">
                EMAIL
            </div>
            <div class="col-8 bg-light p-3 text-dark rounded">
                Mohamad Mughni Rahadiansyah
            </div>
        </div>
        <div class="row mt-1 mb-5">
            <div class="col-md-4 p-2">
                ALAMAT
            </div>
            <div class="col-md-8 bg-light p-3 text-dark rounded">
                Mohamad Mughni Rahadiansyah
            </div>
        </div>
        <div class="row mt-5 text-center">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa-regular fa-pen-to-square"></i> Ubah Profil</a>
                <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-pw"><i class="fa-regular fa-pen-to-square"></i> Ubah Password</a>

                <div class="modal fade modal-dialog-scrollable text-start" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Ubah Profil</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="nama" placeholder="" value="">
                                        <input type="hidden" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Nomor Telepon</label>
                                        <input type="number" class="form-control" id="formGroupExampleInput2" name="no_hp" placeholder="" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="formGroupExampleInput2" name="email" placeholder="" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" placeholder="" rows="3"></textarea>
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

                <div class="modal fade modal-dialog-scrollable text-start" id="edit-pw" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Ubah Password</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Password Lama</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="nama" placeholder="" value="">
                                        <input type="hidden" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Password Baru</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="no_hp" placeholder="" rows="3"></textarea>
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
            </div>
            <div class="col-md-2"></div>
        </div>
        {{-- Buat Profil --}}
        <div class="modal fade modal-dialog-scrollable text-start" id="buat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Buat Profil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                        @csrf
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="nama" placeholder="" value="">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Nomor Telepon</label>
                                <input type="number" class="form-control" id="formGroupExampleInput2" name="email" placeholder="" value="">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Email</label>
                                <input type="email" class="form-control" id="formGroupExampleInput2" name="email" placeholder="" value="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" placeholder="" rows="3"></textarea>
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
    </div>
</div>
@endsection
