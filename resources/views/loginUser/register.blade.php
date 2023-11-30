<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('images/logo welding .png')}}" type="image/x-icon">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header text-center">
                        <div class="d-flex flex-column align-items-center">
                            <img src="{{ asset('images/logo welding .png')}}" alt="Logo" class="bg">
                            <h2 class="card-title">Register</h2>
                            <h6 style="font-weight: normal;">Silahkan Daftar dengan Email Anda!</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        <form action="{{ route('registerIndex') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="mb-3">
                                <label for="telp" class="form-label">Nomer HP</label>
                                <input type="number" name="telp" class="form-control" id="telp" placeholder="Nomer HP" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            <div class="mb-3">
                                <div class="d-grid">
                                    <button class="btn btn-primary custom-button mx-auto">Register</button>
                                </div>
                            </div>
                        </form>
                        <div class="mb-3 d-flex justify-content-between flex-column align-items-center">
                            <div class="d-flex">
                                <span>Sudah memiliki akun?</span>
                            <a href="{{ route('loginIndex') }}" class="text-decoration-none">Masuk di sini</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.querySelector("form").addEventListener("submit", async function(event) {
                event.preventDefault();

                // Fetch API untuk mengirimkan data formulir
                const formData = new FormData(this);
                const response = await fetch("{{ route('registerIndex') }}", {
                    method: "POST",
                    body: formData,
                });

                // Periksa apakah registrasi berhasil
                if (response.ok) {
                    // Arahkan ke halaman login
                    window.location.href = "{{ route('loginIndex') }}";
                } else {
                    // Tangani kegagalan registrasi (tampilkan pesan kesalahan, dll.)
                    // Untuk sementara, Anda bisa mencatat kesalahan ke konsol
                    console.error("Registrasi gagal:", response.statusText);
                }
            });
        </script>

    </body>
</html>
