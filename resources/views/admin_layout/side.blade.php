<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
        <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh/7Pyjxz9q0LoT5u7MVOmSUZI2g1" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color:#4C6687 ">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/" class="d-flex  align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none  w-100 rounded rounded-pill" style="background-color:#D9D9D9">
                            <img class="align-items-center ms-4 mt-3" src="{{asset('img/logo.png')}}" alt="" width="35%">
                            <span class="d-none fw-bolder d-sm-block mt-3 ms-2" style="color:#303947 ">Bengkel Welding</span>
                        </a>
                        <ul class="nav nav-pills flex-column mt-4 mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa-regular fa-user" style="color: #000000;"></i> <span class="ms-1 d-none d-sm-inline">Profil</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa-regular fa-image" style="color: #000000;"></i></i> <span class="ms-1 d-none d-sm-inline ">Kelola Galeri Toko</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link  px-0 align-middle" >
                                    <i class="fa-solid fa-sliders" style="color: #000000;"></i> <span class="ms-1 d-none d-sm-inline">Kelola Jasa Service</span> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Pesanan Baru</span> </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Dalam Proses</span> </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Selesai</span> </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <i class="fa-solid fa-sliders" style="color: #000000;"></i> <span class="ms-1 d-none d-sm-inline ">Kelola Custom Barang</span></a>
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Pesanan Baru</span> </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Dalam Proses</span> </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Selesai</span> </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fa-solid fa-clock-rotate-left" style="color: #000000;"></i> <span class="ms-1 d-none d-sm-inline ">Histori Pesanan</span> </a>
                                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Jasa Service</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Custom Barang</span></a>
                                    </li>
                                    <li>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <hr>
                        <div class="dropdown mb-4 border p-2 rounded">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">Admin Ganteng</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light text-small shadow">
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col py-3 p-5">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
