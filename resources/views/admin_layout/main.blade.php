<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Joyo Royo</title>
        <link rel="icon" type="image/png" href="{{asset('images/logo.ico')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
        <script src="{{asset('js/tables.js')}}"></script>

        <link rel="stylesheet" href="{{asset('css/navbarAdmin.css')}}">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 " style="background-color:">
                    <div class="sidebar d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100 text-white shadow">
                        <a href="/" class=" d-flex  align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none  w-100 rounded rounded-pill shadow" style="background-color:#D9D9D9">
                            <img class="align-items-center ms-4 mt-3" src="{{asset('images/logo welding .png')}}" alt="" width="25%">
                            <span class="d-none fw-bolder d-sm-block mt-3 ms-2" style="color:#303947 ">Bengkel Welding</span>
                        </a>
                        <ul class="nav nav-pills flex-column mt-4 mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="{{url('/dashboard')}}" id="dashboard" class="nav-link align-middle px-0 {{($slug === "dashboard") ? : ''}} ">
                                    <i class="fa-solid fa-house" style="color:#f6f1db;"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/profil')}}" class="nav-link align-middle px-0 {{($slug === "profil") ? : ''}}">
                                    <i class="fa-regular fa-user" style="color: #f6f1db;"></i> <span class="ms-1 d-none d-sm-inline">Profil</span>
                                </a>
                            </li>
                            <li>
                                <ul class="nav flex-column" id="menu">
                                    <li class="nav-item">
                                        <a href="#submenu" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                            <i class="fa-solid fa-bag-shopping" style="color: #f6f1db;"></i>
                                            <span class="ms-1 d-none d-sm-inline">Kelola Produk</span>
                                        </a>
                                        <div class="collapse" id="submenu">
                                            <ul class="nav flex-column ms-1">
                                                <li class="nav-item ">
                                                    <a href="{{ url('/galeri')}}" class="nav-link align-middle px-0">
                                                        <span class="d-none d-sm-inline ">Produk</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/bahan') }}" class="nav-link align-middle px-0">
                                                        {{-- <i class="fa-solid fa-truck" style="color: #f6f1db;"></i> --}}
                                                        <span class="d-none d-sm-inline"> Kelola Harga Bahan</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/pengiriman') }}" class="nav-link align-middle px-0">
                                                        {{-- <i class="fa-solid fa-truck" style="color: #f6f1db;"></i> --}}
                                                        <span class="d-none d-sm-inline"> Kelola Pengiriman</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/kategori') }}" class="nav-link align-middle px-0">
                                                        {{-- <i class="fa-solid fa-truck" style="color: #f6f1db;"></i> --}}
                                                        <span class="d-none d-sm-inline">Kelola Kategori</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul class="nav flex-column" id="menu">
                                    <li class="nav-item">
                                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                            <i class="fa-solid fa-cart-shopping" style="color: #f6f1db;"></i>
                                            <span class="ms-1 d-none d-sm-inline">Pesanan Jasa Service</span>
                                        </a>
                                        <div class="collapse" id="submenu1">
                                            <ul class="nav flex-column ms-1">
                                                <li class="w-100">
                                                    <a href="{{ url('/jsPesananbaru') }}" class="nav-link {{ ($slug === 'jsPesananBaru') ? 'active' : '' }} px-0">
                                                        <span class="d-none d-sm-inline">Pesanan Baru</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/jsDalamproses') }}" class="nav-link {{ ($slug === 'jsDalamProses') ? 'active' : '' }} px-0">
                                                        <span class="d-none d-sm-inline">Dalam Proses</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/jsSelesai') }}" class="nav-link px-0">
                                                        <span class="d-none d-sm-inline">Selesai</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                            <i class="fa-solid fa-cart-shopping" style="color: #f6f1db;"></i>
                                            <span class="ms-1 d-none d-sm-inline">Pesanan Custom Barang</span>
                                        </a>
                                        <div class="collapse" id="submenu2" data-bs-parent="#menu">
                                            <ul class="nav flex-column ms-1">
                                                <li class="w-100">
                                                    <a href="{{ url('/cbPesananBaru') }}" class="nav-link {{ ($slug === 'cbPesananBaru') ? '' : '' }} px-0">
                                                        <span class="d-none d-sm-inline">Pesanan Baru</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/cbDalamProses') }}" class="nav-link {{ ($slug === 'cbDalamProses') ? '' : '' }} px-0">
                                                        <span class="d-none d-sm-inline">Dalam Proses</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/cbSelesai') }}" class="nav-link {{ ($slug === 'cbSelesai') ? '' : '' }} px-0">
                                                        <span class="d-none d-sm-inline">Selesai</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                            <i class="fa-solid fa-clock-rotate-left" style="color: #f6f1db;"></i>
                                            <span class="ms-1 d-none d-sm-inline">Histori Pesanan</span>
                                        </a>
                                        <div class="collapse" id="submenu3" data-bs-parent="#menu">
                                            <ul class="nav flex-column ms-1">
                                                <li class="w-100">
                                                    <a href="{{ url('/historyJaser') }}" class="nav-link px-0">
                                                        <span class="d-none d-sm-inline ">Jasa Service</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/historyCusbar') }}" class="nav-link px-0">
                                                        <span class="d-none d-sm-inline ">Custom Barang</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>



                        </ul>
                        <hr>
                        <div class="mb-4 w-100">
                            <a href="{{ route('logout') }}" type="button" class="btn shadow w-100" style="background-color:#4C6687;color:white"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <div class="col py-3 p-5 mt-5 container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>


