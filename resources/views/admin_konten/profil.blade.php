@extends('admin_layout.main')
@section('content')
<div class="konten col py-3 p-5">

    <div class="container rounded p-5 shadow" style="background-color: #F7F6F4">
        @forelse ($profil as $row)
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="{{asset('storage/img/' .$row->gambar)}}" alt="" class="rounded-circle shadow">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <a href="#" type="button" class="btn btn-sm mb-3 shadow" data-bs-toggle="modal" data-bs-target="#edit-profil" style="background-color:#4C6687;color:white">Ubah Profil</a>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4 p-2">
                NAMA
            </div>
            <div class="col-md-8 bg-light p-3 text-dark rounded shadow-sm">
                {{$row->nama}}
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-md-4 p-2">
                NOMOR TELEPON
            </div>
            <div class="col-md-8 bg-light p-3 text-dark rounded shadow-sm">
                {{$row->no_hp}}
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-md-4 p-2">
                EMAIL
            </div>
            <div class="col-8 bg-light p-3 text-dark rounded shadow-sm">
                {{$row->email}}
            </div>
        </div>
        <div class="row mt-1 mb-5">
            <div class="col-md-4 p-2">
                ALAMAT
            </div>
            <div class="col-md-8 bg-light p-3 text-dark rounded shadow-sm">
                {{$row->alamat}}
            </div>
        </div>


            <div class="row mt-5 text-center">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <a href="#" type="button" class="btn shadow" data-bs-toggle="modal" data-bs-target="#edit" style="background-color:#4C6687;color:white"><i class="fa-regular fa-pen-to-square"></i> Ubah Profil</a>
                    <a href="#" type="button" class="btn shadow" data-bs-toggle="modal" data-bs-target="#edit" style="background-color:#4C6687;color:white"><i class="fa-regular fa-pen-to-square"></i> Ubah Password</a>
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
                                <form action="{{route('profil.update', $row->id_profil)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" name="nama" placeholder="" value="{{$row->nama}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">No Telepon</label>
                                        <input type="number" class="form-control" id="formGroupExampleInput2" name="no_hp" placeholder="" value="{{$row->no_hp}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="formGroupExampleInput2" name="email" placeholder="" value="{{$row->email}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" placeholder="" rows="3">{{$row->alamat}}</textarea>
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

                {{-- Edit Profil --}}
                <div class="modal fade modal-dialog-scrollable text-start" id="edit-profil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Ubah Profil</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('profil.updateProfil',$row->id_profil)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Foto Profil</label>
                                        <input type="file" class="form-control" id="formGroupExampleInput" name="gambar" placeholder="" value="{{$row->gambar}}">
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
            <div class="modal fade modal-dialog-scrollable text-start" id="edit-pw" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <!-- ... Kode Modal Edit Password ... -->
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
