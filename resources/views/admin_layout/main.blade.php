<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Joyo Royo</title>
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
                            <img class="align-items-center ms-4 mt-3" src="{{asset('img/logo.png')}}" alt="" width="25%">
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
                            <li class="nav-item ">
                                <a href="{{ url('/galeri')}}" class="nav-link align-middle px-0">
                                    <i class="fa-regular fa-image {{($slug === "galeri") ? 'active' : ''}}" style="color: #f6f1db;"></i></i> <span class="ms-1 d-none d-sm-inline ">Kelola Galeri Toko</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link  px-0 align-middle" >
                                    <i class="fa-solid fa-sliders" style="color: #f6f1db;"></i> <span class="ms-1 d-none d-sm-inline">Kelola Jasa Service</span> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="{{url('/jsPesananbaru')}}" class="nav-link {{($slug === "jsPesananBaru") ? : ''}} px-0"> <span class="d-none d-sm-inline text-white">Pesanan Baru</span> </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/jsDalamproses')}}" class="nav-link {{($slug === "jsDalamProses") ? 'active' : ''}} px-0"> <span class="d-none d-sm-inline text-white">Dalam Proses</span> </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/jsSelesai')}}" class="nav-link {{($slug === "jsSelesai")?:''}} px-0"> <span class="d-none d-sm-inline text-white">Selesai</span> </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <i class="fa-solid fa-sliders" style="color: #f6f1db;"></i> <span class="ms-1 d-none d-sm-inline ">Kelola Custom Barang</span></a>
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="{{url('/cbPesananBaru')}}" class="nav-link {{($slug === "cbPesananBaru")}} px-0"> <span class="d-none d-sm-inline text-white">Pesanan Baru</span> </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/cbDalamProses')}}" class="nav-link {{($slug === "cbDalamProses")}} px-0"> <span class="d-none d-sm-inline text-white">Dalam Proses</span> </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/cbSelesai')}}" class="nav-link {{($slug === "cbSelesai")}} px-0"> <span class="d-none d-sm-inline text-white">Selesai</span> </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fa-solid fa-clock-rotate-left" style="color:#f6f1db ;"></i> <span class="ms-1 d-none d-sm-inline ">Histori Pesanan</span> </a>
                                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="{{url('/historyJaser')}}" class="nav-link {{($slug === "historyJaser")}} px-0"> <span class="d-none d-sm-inline text-white">Jasa Service</span></a>
                                    </li>
                                    <li>
                                        <a href="{{url('/historyCusbar')}}" class="nav-link {{($slug === "historyCusbar")}} px-0"> <span class="d-none d-sm-inline text-white">Custom Barang</span></a>
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
                                <span class="d-none d-sm-inline mx-1">Admin Utama</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light text-small shadow">
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
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


