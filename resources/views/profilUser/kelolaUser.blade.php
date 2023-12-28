@extends('user-layout.nav-user')
@section('konten')
        <section id="productspes">
        <div class="container-fluid">
            <div class="row">

                <div class="konten1 col py-3">
                    <div class="breadcrumb-item active" style="font-size: 19px" aria-current="page">Kelola Akun</div>
                    <div class="awal1">
                        <div class="container1 rounded p-5">

                            <div class="user-profile">
                                <div class="photoprofile">
                                    <div class="profile-image" style="pointer-events: none;">
                                        <img id="profilePicture" src="{{ asset('images/profil1.png') }}" alt="Profile Picture">
                                    </div>
                                </div>
                                <div class="user-name">
                                    <h4>
                                        @if(session('user') && session('user')->username)
                                            {{ session('user')->username }}
                                        @else
                                            USERNAME
                                        @endif
                                    </h4>
                                </div>
                                <!-- Button to open file input -->
                                <button type="button" class="btn" style="background-color: #4C6687; color: #fcf2c5;" onclick="document.getElementById('fileInput').click()">
                                    Ganti Foto
                                </button>
                                <!-- File input to upload a new profile picture -->
                                {{-- <input type="file" id="fileInput" style="display: none" accept="image/*" onchange="updateProfilePicture(this)" value=""> --}}
                                <input type="file" id="fileInput" name="profil" style="display: none" accept="image/*" onchange="updateProfilePicture(this)">
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                            <script>
                                function openFileInput() {
                                    document.getElementById('fileInput').click();
                                }

                                function updateProfilePicture(input) {
                                    if (input.files && input.files[0]) {
                                        var file = input.files[0];
                                        var formData = new FormData();
                                        formData.append('profil', file);

                                       // Kirim file ke server menggunakan AJAX
                                        axios.post(`/profil/update-foto`, formData, {
                                            headers: {
                                                'Content-Type': 'multipart/form-data',
                                            }
                                        })
                                        .then(response => {
                                            // Update tampilan gambar profil jika berhasil
                                            document.getElementById('profilePicture').src = response.data.url;
                                        })
                                        .catch(error => {
                                            console.error('Error uploading profile picture:', error);
                                        });
                                    }
                                }
                            </script>


                        </div>
                    </div>
                </div>

                <div class="konten2 col py-3">
                    <div class="awal2">
                        <div class="container2 rounded p-5">
                            <div class="user-profile">
                                <div class="user-name">
                                    <h4>Ubah Akun</h4>
                                </div>
                                <hr class="underline">
                            </div>
                            <form action="{{ route('updateProfileAndAddress') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="formGroupExampleInputt" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="" value="{{ session('user')->username }}">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Nama Legkap</label>
                                    <input type="text" class="form-control" name="name" placeholder="" value="{{ session('user')->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="" value="{{ session('user')->email }}">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput3" class="form-label">No Telepon</label>
                                    <input type="number" class="form-control" name="telp" placeholder="" value="{{ session('user')->telp }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-alamat">Alamat</label>
                                    {{-- <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" placeholder="" rows="3"></textarea> --}}
                                    <div class="alamat">
                                        <label for="exampleFormControlTextarea2" class="form-label">Nama Jalan</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea2" name="nama_alamat" placeholder="" value="{{ $alamat->nama_alamat ?? '' }}">

                                        <label for="exampleFormControlTextarea3" class="form-label">RT/RW</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea3" name="rt_rw" placeholder="" value="{{ $alamat->rt_rw ?? '' }}">

                                        <label for="exampleFormControlTextarea4" class="form-label">Desa</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea4" name="desa" placeholder="" value="{{ $alamat->desa ?? '' }}">

                                        <label for="exampleFormControlTextarea5" class="form-label">Kecamatan</label>
                                        <input type="text" class="form-control" id="eampleFormControlTextarea5" name="kecamatan" placeholder="" value="{{ $alamat->kecamatan ?? '' }}">

                                        <label for="exampleFormControlTextarea6" class="form-label">Kabupaten</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea6" name="kabupaten" placeholder="" value="{{ $alamat->kabupaten ?? '' }}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    {{-- @if ($kelola_user) --}}
                                    <button type="submit" class="btn btn-success" style="background-color: #4C6687; color: #fcf2c5;">Simpan</button>
                                {{-- @else
                                    <p>Error: User tidak ditemukan</p>
                                @endif --}}
                                </div>
                            </form>
                            <hr class="underline">
                        </div>
                    </div>
                </div>

                <div class="konten2 col py-3">
                    <div class="awal2" >
                        <div class="container2 rounded p-5">
                            <div class="user-profile">
                                <div class="user-name">
                                    <h4>Ubah Password</h4>
                                </div>
                                <hr class="underline">
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Password Lama</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="pw_lama" placeholder="" value="">
                                        <input type="hidden" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Password Baru</label>
                                        <input class="form-control" id="exampleFormControlTextarea1" name="pw_baru" placeholder="" rows="3">
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" style="background-color: #4C6687;color: #fcf2c5;">Simpan</button>
                                        {{-- <a href="{{ route('ProfilUserIndex') }}" type="button" class="btn btn-warning" style="background-color: red; color:white" data-bs-dismiss="modal">Kembali</a> --}}
                                    </div>
                                </form>
                            <hr class="underline">
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function openFileInput() {
                    // Trigger click event on the file input
                    document.getElementById('fileInput').click();
                }

                function updateProfilePicture(input) {
                    // Check if a file is selected
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            // Update the profile picture with the selected image
                            document.getElementById('profilePicture').src = e.target.result;
                        };

                        // Read the selected file as a data URL
                        reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
        </div>
        </section>
