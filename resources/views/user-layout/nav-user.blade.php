<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/logo welding .png')}}" type="image/x-icon">
    <title>JOYO ROYO BENGKEL WELDING</title>
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rating.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}">
    <link rel="stylesheet" href="{{ asset('css/daftarpesanan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tabelprogres.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profilUser.css') }}">
    <link rel="stylesheet" href="{{ asset('css/akunUser.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kelolaUser.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bantuan.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JavaScript (Popper.js and Bootstrap JS) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="navCont">
        <div class="logo-and-title">
            <img src="{{ asset('images/logo welding .png')}}" alt="Logo" width="30" height="24" class="bg">
            <strong>JOYO ROYO</strong>
        </div>
        <div class="search-bar">
            <div class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Cari Barang Anda" aria-label="Search">
                <button class="btn btn-light" type="submit">
                    <img src="{{ asset('images/cari.png')}}" alt="Cari" width="20" height="20">
                </button>
            </div>
        </div>
    </div>
    <header>
        <nav class="navbar">
            <ul id="navleft">
                <li><a href="{{route('bantuan.index')}}" class="fitur1"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#ffffff" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>Bantuan</a></li>
                <li><a href="{{ route('NotifikasiIndex') }}" class="fitur1"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#ffffff" d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v25.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416H424c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm0 96c61.9 0 112 50.1 112 112v25.4c0 47.9 13.9 94.6 39.7 134.6H72.3C98.1 328 112 281.3 112 233.4V208c0-61.9 50.1-112 112-112zm64 352H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z"/></svg>Notifikasi</a></li>
            </ul>
            <ul id="navright">
                <li><a href="{{ route('produk.index') }}" class="fitur"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#e9db9c" d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>Produk</a></li>
                <li><a href="{{ route('serviceBaruIndex') }}" class="fitur"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#e9db9c" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>Service</a></li>
                <li><a href="{{ route('wishlist.index') }}" class="fitur"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#e9db9c" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>Whistlist</a></li>
                <li><a href="{{ route('daftarpesanan.index') }}" class="fitur"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#e9db9c" d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>Pesanan</a></li>
                <li class="fitur">
                    <a href="#" class="dropbtn">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#e9db9c" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                        Profil
                    </a>
                    <div class="dropdown-content" id="dropdownProfil">
                        <a class="listdrop" href="{{ route('ProfilUserIndex') }}">Profil</a>
                        <a class="listdrop" href="{{ route('logout') }}">Logout</a>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                        var dropdownButton = document.querySelector('.dropbtn');
                        var dropdownContent = document.querySelector('.dropdown-content');

                        dropdownButton.addEventListener('click', function(event) {
                            event.stopPropagation(); // Menghentikan event click dari mempengaruhi elemen lain

                            if (dropdownContent.style.display === 'block') {
                                dropdownContent.style.display = 'none';
                            } else {
                                dropdownContent.style.display = 'block';
                            }
                        });

                        document.addEventListener('click', function(event) {
                            var isClickInside = dropdownButton.contains(event.target) || dropdownContent.contains(event.target);

                            if (!isClickInside) {
                                dropdownContent.style.display = 'none';
                            }
                        });
                    });
                    </script>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="sidebar">
            <div>
                <div class="profil">
                    <div class="col-md-12 text-center mb-5">
                        <img src="{{asset('img/logo.png')}}" alt="" class="rounded-circle ">
                    </div>
                    <h4 class="p-1 border-bottom">
                        @if(session('user') && session('user')->username)
                            {{ session('user')->username }}
                        @else
                            USERNAME
                        @endif
                    </h4>
                </div>

                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ route('ProfilUserIndex') }}">
                        <span class="fa fa-circle pr-1" id="profil"></span>Akun Saya
                    </a></li>
                    <li class="list-group-item"><a href="{{ route('NotifikasiIndex') }}">
                        <span class="fa fa-circle pr-1" id="notifikasi"></span>Notifikasi
                    </a></li>
                    <li class="list-group-item"><a href="{{ route('serviceBaruIndex') }}">
                        <span class="fa fa-circle pr-1" id="daftarpesanan"></span>Service
                    </a></li>
                    <li class="list-group-item"><a href="{{ route('daftarpesanan.index') }}">
                        <span class="fa fa-circle pr-1" id="daftarpesanan"></span>Daftar Pesanan
                    </a></li>
                    <li class="list-group-item"><a href="{{ route('wishlist.index') }}">
                        <span class="fa fa-circle pr-1" id="wishlist"></span>Whishlist
                    </a></li>
                </ul>
            </div>
        </section>
        @yield('konten')
    </main>
</body>
</html>
