@extends('user-layout.nav-user')
@section('konten')
        <section id="productspes">
        <div class="container-fluid">
            <div class="row">

                <div class="konten1 col py-3">
                    <div class="breadcrumb-item active" style="font-size: 19px" aria-current="page">Kelola Akun</div>
                    <div class="awal1">
                        <div class="container1 rounded p-5">

                            {{-- <form method="POST" action="{{ route('updateProfilePicture', ['id' => $buat_akun->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT') --}}
                                <div class="user-profile">
                                    <div class="photoprofile">
                                        <div class="profile-image" onclick="openFileInput()">
                                            <img id="profilePicture" src="{{ asset('images/kucing.jpg') }}" alt="Profile Picture">
                                        </div>
                                    </div>
                                    <div class="user-name">
                                        <h4>
                                            USERNAME
                                            {{-- @foreach($buat_akun as $akun)
                                                {{ $akun->username }}
                                            @endforeach --}}
                                        </h4>
                                    </div>
                                    <!-- File input to upload a new profile picture -->
                                    <input type="file" id="fileInput" style="display: none" accept="image/*" onchange="updateProfilePicture(this)">
                                    <button type="button" class="btn" style="background-color: #4C6687; color: #fcf2c5;" onclick="document.getElementById('fileInput').click()">
                                        Ganti Foto
                                    </button>
                                </div>
                            </form>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                            <script>
                            document.getElementById('fileInput').addEventListener('change', function (e) {
                                var file = e.target.files[0];
                                if (file) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    document.querySelector('.profile-image img').src = e.target.result;
                                }
                                reader.readAsDataURL(file);
                                }
                            });
                            // function updateProfilePicture(input) {
                            //     var file = input.files[0];
                            //     if (file) {
                            //         var reader = new FileReader();
                            //         reader.onload = function (e) {
                            //             document.getElementById('profilePicture').src = e.target.result;
                            //         }
                            //         reader.readAsDataURL(file);
                            //     }
                            // }

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
                            <form action="" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Nama Legkap</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="nama_lengkap" placeholder="" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="formGroupExampleInput2" name="email" placeholder="" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">No Telepon</label>
                                    <input type="number" class="form-control" id="formGroupExampleInput2" name="no_hp" placeholder="" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" placeholder="" rows="3"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" style="background-color: #4C6687; color: #fcf2c5;">Simpan</button>
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
