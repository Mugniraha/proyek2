@extends('admin_layout.main')
@section('content')
<div class="konten col py-3 p-5">

    <div class="container rounded p-5 shadow" style="background-color: #F7F6F4">
        @forelse ($profil as $row)

        <div class="row">
            <div class="col-md-12 text-center">
                @if($row->profil)
                <img src="{{asset('storage/img/' .$row->profil)}}" alt="" width="15%" class="rounded-circle shadow">
                @else
                    <img src="{{ asset('images/profil.png') }}" alt="Default Profil" width="15%" class="rounded-circle shadow">
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <a href="#" type="button" class="btn btn-sm mb-3 shadow" data-bs-toggle="modal" data-bs-target="#edit-profil" style="background-color:#4C6687;color:white">Ubah Foto</a>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4 p-2">
                NAMA
            </div>
            <div class="col-md-8 bg-light p-3 text-dark rounded shadow-sm">
                {{$row->namaAdmin}}
            </div>
        </div>
        {{-- <div class="row mt-1">
            <div class="col-md-4 p-2">
                NOMOR TELEPON
            </div>
            <div class="col-md-8 bg-light p-3 text-dark rounded shadow-sm">

            </div>
        </div> --}}
        <div class="row mt-1">
            <div class="col-md-4 p-2">
                EMAIL
            </div>
            <div class="col-8 bg-light p-3 text-dark rounded shadow-sm">
                {{$row->emailAdmin}}
            </div>
        </div>
        <div class="row mt-1 mb-5">
            <div class="col-md-4 p-2">
                ALAMAT
            </div>
            <div class="col-md-8 bg-light p-3 text-dark rounded shadow-sm">
                {{$row->alamatAdmin}}
            </div>
        </div>


            <div class="row mt-5 text-center">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <a href="#" type="button" class="btn shadow" data-bs-toggle="modal" data-bs-target="#edit" style="background-color:#4C6687;color:white"><i class="fa-regular fa-pen-to-square"></i> Ubah Profil</a>
                    <a href="#" type="button" class="btn shadow" data-bs-toggle="modal" data-bs-target="#ubahpw{{$row->idAdmin}}" style="background-color:#4C6687;color:white"><i class="fa-regular fa-pen-to-square"></i> Ubah Password</a>
                </div>
                <div class="col-md-2"></div>
            </div>

            {{-- Edit Profil --}}
            <div class="modal fade modal-dialog-scrollable text-start" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Ubah Profil</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('profil.update', $row->idAdmin)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" name="namaAdmin" placeholder="" value="{{$row->namaAdmin}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="formGroupExampleInput2" name="emailAdmin" placeholder="" value="{{$row->emailAdmin}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="alamatAdmin" placeholder="" rows="3">{{$row->alamatAdmin}}</textarea>
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

                {{-- Edit Foto Profil --}}
                <div class="modal fade modal-dialog-scrollable text-start" id="edit-profil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Ubah Foto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('profil.updateProfil',$row->idAdmin)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Foto Profil</label>
                                        <input type="file" class="form-control" id="formGroupExampleInput" name="profil" placeholder="" value="">
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

            {{-- Edit Password --}}
            <div class="modal fade modal-dialog-scrollable text-start" id="ubahpw{{$row->idAdmin}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Ubah Password</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('changePassword',$row->idAdmin) }}" method="POST">
                                @csrf
                                @method('PUT') <!-- Gunakan metode PUT sesuai dengan definisi route -->
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Password Lama</label>
                                    <input type="password" class="form-control" id="passowrd" value="" name="old_password" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Password Baru</label>
                                    <input type="password" class="form-control" id="password" name="new_password" placeholder="">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" style="background-color: #4C6687;color: #fcf2c5;">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <!-- Tampilkan pesan atau tindakan yang sesuai saat data tidak tersedia -->
            <h3 class="text-shadow">Profil tidak ditemukan, yuk <a href="#" data-bs-toggle="modal" data-bs-target="#buat">buat profil</a> kamu sekarang </h3>
        @endforelse
    </div>
</div>


{{-- Modal Buat Profil --}}
<div class="modal fade modal-dialog-scrollable text-start" id="buat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Buat Profil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('profil.store')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Foto Profil</label>
                                <input type="file" class="form-control" id="formGroupExampleInput" name="gambar" placeholder="" value="">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="nama" placeholder="" value="">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">No Telepon</label>
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
@endsection
