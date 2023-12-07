<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Buat Akun</title>
        <link rel="stylesheet" href="{{ asset('css/form.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container w-50 shadow p-3">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Buat Akun</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('buatAkun.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Username</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="username" placeholder="" value="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="nama_lengkap" placeholder="" value="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="email" class="form-control" id="formGroupExampleInput2" name="email" placeholder="" value="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" id="formGroupExampleInput2" name="telpon" placeholder="" value="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="alamat" placeholder="" value="">
                    </div>
            </div>
                    <div class="modal-footer d-block">
                        <button type="submit" class="btn btn-success d-block w-100 mt-2">Simpan</button>
                        <a href="{{ route('ProfilUserIndex') }}" type="button" class="btn btn-warning d-block w-100">Batal</a>
                    </div>
                </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
