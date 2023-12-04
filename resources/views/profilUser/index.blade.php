<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profil User</title>
        <link rel="stylesheet" href="{{ asset('css/profilUser.css') }}">
        <link rel="stylesheet" href="{{ asset('css/akunUser.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="konten col py-3 p-5">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Akun Saya</li>
                </ol>
            </nav>
            <a href="#" type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#buat"><i class="fa-solid fa-plus" style="color: #ffffff;"></i> Buat Akun</a>
            {{-- <br> --}}
            <div class="awal" >
                <div class="container rounded p-5">
                    <div class="user-profile">
                        <div class="profile-image">
                            <img src="{{ asset('images/kucing.jpg') }}" alt="Profile Picture">
                        </div>
                        <div class="edit-icon" onclick="openFileInput()">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/></svg>
                        </div>
                        <div class="user-name">
                            <h4>USERNAME</h4>
                        </div>
                        <hr class="underline">
                    </div>
                    <div class="row">
                        <div class="col-md-4 p-2">
                            Nama Lengkap
                        </div>
                        <div class="col-md-8 bg-light p-3 text-dark rounded">
                            Sholihah
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-4 p-2">
                            Email
                        </div>
                        <div class="col-8 bg-light p-3 text-dark rounded">
                            sholihah@gmail.com
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-4 p-2">
                            No Telepon
                        </div>
                        <div class="col-md-8 bg-light p-3 text-dark rounded">
                            08999999999
                        </div>
                    </div>
                    <div class="row mt-1 mb-5">
                        <div class="col-md-4 p-2">
                            Alamat
                        </div>
                        <div class="col-md-8 bg-light p-3 text-dark rounded">
                            Indramayu
                        </div>
                    </div>
                    <hr class="underline">
                    <div class="row mt-5 text-center">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <a href="{{ route('KelolaUserIndex') }}" type="button" class="btn btn-primary" style="text-align: left;"> Ubah</a>
                        </div>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                {{-- <script>
                    function openFileInput() {
                        console.log("Edit icon clicked");  // Tambahkan log untuk memeriksa apakah fungsi dijalankan
                        document.getElementById('fileInput').click();
                    }

                    function displayImage(input) {
                        const file = input.files[0];
                        if (file) {
                            const reader = new FileReader();

                            reader.onload = function (e) {
                                document.getElementById('profilePicture').src = e.target.result;
                            };

                            reader.readAsDataURL(file);
                        }
                    }
                </script> --}}
                <script>
                    // Contoh JavaScript untuk menangani klik pada tautan Akun Saya
                    document.getElementById('profile-link').addEventListener('click', function (event) {
                        event.preventDefault();

                        // Sembunyikan konten lain jika diperlukan

                        // Tampilkan konten terkait Akun Saya
                        document.getElementById('profile-content').innerHTML = `
                            <h1>Selamat datang di Akun Saya!</h1>
                            <p>Ini adalah konten terkait Akun Saya.</p>
                        `;
                    });
                </script>

    </body>
</html>

