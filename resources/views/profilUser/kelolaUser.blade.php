<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kelola Akun User</title>
        <link rel="stylesheet" href="{{ asset('css/kelolaUser.css') }}">
        <link rel="stylesheet" href="{{ asset('css/akunUser.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="konten1 col py-3 p-5">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><b>Kelola Akun Saya</b></li>
                        </ol>
                    </nav>
                    <div class="awal1">
                        <div class="container1 rounded p-5">
                            <div class="user-profile">
                                <div class="profile-image">
                                    <img src="{{ asset('images/kucing.jpg') }}" alt="Profile Picture">
                                </div>
                                <div class="user-name">
                                    <h4>USERNAME</h4>
                                </div>
                                <input type="file" id="fileInput" style="display: none" accept="image/*">
                                <button type="button" class="btn btn-primary" style="background-color: #4C6687" onclick="document.getElementById('fileInput').click()">
                                    Ganti Foto
                                </button>
                            </div>
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
                            </script>
                        </div>
                    </div>
                </div>

                <div class="konten2 col py-3 p-5">
                    <div class="awal2" >
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
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="nama" placeholder="" value="">
                                    <input type="hidden" value="">
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
                                <button type="submit" class="btn btn-success" style="background-color: #4C6687">Simpan</button>
                            </div>
                            </div>
                            </form>
                            <hr class="underline">


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
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="nama" placeholder="" value="">
                                        <input type="hidden" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Password Baru</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="no_hp" placeholder="" rows="3"></textarea>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" style="background-color: #4C6687">Simpan</button>
                                        <button type="button" class="btn btn-warning" style="background-color: red" data-bs-dismiss="modal">Kembali</button>
                                    </div>
                                </form>
                            <hr class="underline">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

