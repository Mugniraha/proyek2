<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/logo welding .png')}}" type="image/x-icon">
    <title>Ubah Password Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
</head>
<body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session()->has('status'))
                    <div class="alert alert-success">
                        {{ session()->get('status') }}
                    </div>
                @endif
                <div class="card-header text-center">
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ asset('images/logo welding .png')}}" alt="Logo" class="bg">
                        <h2 class="card-title">Ubah Password Admin</h2>
                        <h6 style="font-weight: normal;">Masukkan password baru dan konfirmasinya</h6>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('password.updateAdmin') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{request()->token }}">
                        <input type="hidden" name="email" value="{{request()->email }}">

                        <div class="mb-3">
                            <label for="new_password" class="form-label">Password Baru</label>
                            <input type="password" name="password" class="form-control" id="new_password" placeholder="Masukkan Password Baru" >
                        </div>

                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Konfirmasi Password Baru</label>
                            <input type="password" name="confirmation_password" class="form-control" id="confirm_password" placeholder="Ulangi Password Baru" >
                        </div>

                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary custom-button mx-auto" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>

                    <div class="mb-3 d-flex justify-content-between flex-column align-items-center">
                        <a href="{{ route('loginAdminIndex') }}" class="text-decoration-none">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
