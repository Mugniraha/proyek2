<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo welding .png')}}" type="image/x-icon">
    <title>JOYO ROYO</title>
    <link rel="stylesheet" href="{{ asset('css/homeAwal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/testimoni.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

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
        <div class="log">
            <img src="{{ asset('images/profil.png')}}" alt="Logo" width="25" height="22" class="d-inline-block align-text-top">
            <a href="{{ route('loginIndex') }}" id="loginBtn" style="text-decoration: none;">Login</a>
            <img src="{{ asset('images/love.png')}}" alt="Logo" width="25" height="22" class="d-inline-block align-text-top">
            <a href="halaman_favorit.html" id="favoriteBtn" style="text-decoration: none;">Favorite</a>
        </div>
    </div>
    <header style="background-color: #44403B;">
        <nav>
            <ul>
				<li><a href="#" class="fitur">HOME</a></li>
                <li><a href="#produk" class="fitur">PRODUK</a></li>
                <li><a href="#testimoni" class="fitur">TESTIMONI</a></li>
                <li><a href="#layanan" class="fitur">LAYANAN</a></li>
                <li><a href="#tentang_kami" class="fitur">TENTANG KAMI</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="{{ asset('images/halaman1.png')}}" class="d-block w-50 mx-auto" alt="Slide Pertama">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('images/halaman2.png')}}" class="d-block w-50 mx-auto" alt="Slide Kedua">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('images/halaman3.png')}}" class="d-block w-50 mx-auto" alt="Slide Ketiga">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('images/halaman4.png')}}" class="d-block w-50 mx-auto" alt="Slide keempat">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Selanjutnya</span>
            </button>
        </div>

        <section id="produk">
            <div class="judpro">
                <h4 class="modal-title">Produk</h4>
            </div>
            <div class="container">
                <div class="row">
                        <div class="card">
                            <div class="card-top">
                                <img class="card-img-top" src="images/warung2.jpg" alt="Card image cap">
                            </div>
                            <div class="btn">
                                <button class="btnulasan"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#4c6687" d="M168.2 384.9c-15-5.4-31.7-3.1-44.6 6.4c-8.2 6-22.3 14.8-39.4 22.7c5.6-14.7 9.9-31.3 11.3-49.4c1-12.9-3.3-25.7-11.8-35.5C60.4 302.8 48 272 48 240c0-79.5 83.3-160 208-160s208 80.5 208 160s-83.3 160-208 160c-31.6 0-61.3-5.5-87.8-15.1zM26.3 423.8c-1.6 2.7-3.3 5.4-5.1 8.1l-.3 .5c-1.6 2.3-3.2 4.6-4.8 6.9c-3.5 4.7-7.3 9.3-11.3 13.5c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c5.1 0 10.2-.3 15.3-.8l.7-.1c4.4-.5 8.8-1.1 13.2-1.9c.8-.1 1.6-.3 2.4-.5c17.8-3.5 34.9-9.5 50.1-16.1c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9zM144 272a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm144-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm80 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>Ulasan</button>
                            </div>
                            <div class="card-body">
                                <div class="model">
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                </div>
                                <div class="headline">
                                    <p>Tangga</p>
                                </div>
                                <h7 class="card-text">Tangga Lipat</h7>
                                <p>Dimensi Produk :</p>
                                <p>Warna :</p>
                                <p>Bahan Rangka :</p>
                                <p>Bahan Lainnya :</p>
                                <div class="btn">
                                    <button class="btnwhis"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>Whistlist</button>
                                    <button class="btnord"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>Order</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-top">
                                <img class="card-img-top" src="images/warung2.jpg" alt="Card image cap">
                            </div>
                            <div class="btn">
                                <button class="btnulasan"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#4c6687" d="M168.2 384.9c-15-5.4-31.7-3.1-44.6 6.4c-8.2 6-22.3 14.8-39.4 22.7c5.6-14.7 9.9-31.3 11.3-49.4c1-12.9-3.3-25.7-11.8-35.5C60.4 302.8 48 272 48 240c0-79.5 83.3-160 208-160s208 80.5 208 160s-83.3 160-208 160c-31.6 0-61.3-5.5-87.8-15.1zM26.3 423.8c-1.6 2.7-3.3 5.4-5.1 8.1l-.3 .5c-1.6 2.3-3.2 4.6-4.8 6.9c-3.5 4.7-7.3 9.3-11.3 13.5c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c5.1 0 10.2-.3 15.3-.8l.7-.1c4.4-.5 8.8-1.1 13.2-1.9c.8-.1 1.6-.3 2.4-.5c17.8-3.5 34.9-9.5 50.1-16.1c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9zM144 272a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm144-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm80 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>Ulasan</button>
                            </div>
                            <div class="card-body">
                                <div class="model">
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                </div>
                                <div class="headline">
                                    <p>Tangga</p>
                                </div>
                                <h7 class="card-text">Tangga Lipat</h7>
                                <p>Dimensi Produk :</p>
                                <p>Warna :</p>
                                <p>Bahan Rangka :</p>
                                <p>Bahan Lainnya :</p>
                                <div class="btn">
                                    <button class="btnwhis"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>Whistlist</button>
                                    <button class="btnord"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>Order</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-top">
                                <img class="card-img-top" src="images/warung2.jpg" alt="Card image cap">
                            </div>
                            <div class="btn">
                                <button class="btnulasan"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#4c6687" d="M168.2 384.9c-15-5.4-31.7-3.1-44.6 6.4c-8.2 6-22.3 14.8-39.4 22.7c5.6-14.7 9.9-31.3 11.3-49.4c1-12.9-3.3-25.7-11.8-35.5C60.4 302.8 48 272 48 240c0-79.5 83.3-160 208-160s208 80.5 208 160s-83.3 160-208 160c-31.6 0-61.3-5.5-87.8-15.1zM26.3 423.8c-1.6 2.7-3.3 5.4-5.1 8.1l-.3 .5c-1.6 2.3-3.2 4.6-4.8 6.9c-3.5 4.7-7.3 9.3-11.3 13.5c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c5.1 0 10.2-.3 15.3-.8l.7-.1c4.4-.5 8.8-1.1 13.2-1.9c.8-.1 1.6-.3 2.4-.5c17.8-3.5 34.9-9.5 50.1-16.1c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9zM144 272a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm144-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm80 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>Ulasan</button>
                            </div>
                            <div class="card-body">
                                <div class="model">
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                </div>
                                <div class="headline">
                                    <p>Tangga</p>
                                </div>
                                <h7 class="card-text">Tangga Lipat</h7>
                                <p>Dimensi Produk :</p>
                                <p>Warna :</p>
                                <p>Bahan Rangka :</p>
                                <p>Bahan Lainnya :</p>
                                <div class="btn">
                                    <button class="btnwhis"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>Whistlist</button>
                                    <button class="btnord"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>Order</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-top">
                                <img class="card-img-top" src="images/warung2.jpg" alt="Card image cap">
                            </div>
                            <div class="btn">
                                <button class="btnulasan"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#4c6687" d="M168.2 384.9c-15-5.4-31.7-3.1-44.6 6.4c-8.2 6-22.3 14.8-39.4 22.7c5.6-14.7 9.9-31.3 11.3-49.4c1-12.9-3.3-25.7-11.8-35.5C60.4 302.8 48 272 48 240c0-79.5 83.3-160 208-160s208 80.5 208 160s-83.3 160-208 160c-31.6 0-61.3-5.5-87.8-15.1zM26.3 423.8c-1.6 2.7-3.3 5.4-5.1 8.1l-.3 .5c-1.6 2.3-3.2 4.6-4.8 6.9c-3.5 4.7-7.3 9.3-11.3 13.5c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c5.1 0 10.2-.3 15.3-.8l.7-.1c4.4-.5 8.8-1.1 13.2-1.9c.8-.1 1.6-.3 2.4-.5c17.8-3.5 34.9-9.5 50.1-16.1c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9zM144 272a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm144-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm80 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>Ulasan</button>
                            </div>
                            <div class="card-body">
                                <div class="model">
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                </div>
                                <div class="headline">
                                    <p>Tangga</p>
                                </div>
                                <h7 class="card-text">Tangga Lipat</h7>
                                <p>Dimensi Produk :</p>
                                <p>Warna :</p>
                                <p>Bahan Rangka :</p>
                                <p>Bahan Lainnya :</p>
                                <div class="btn">
                                    <button class="btnwhis"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>Whistlist</button>
                                    <button class="btnord"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>Order</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-top">
                                <img class="card-img-top" src="images/warung2.jpg" alt="Card image cap">
                            </div>
                            <div class="btn">
                                <button class="btnulasan"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#4c6687" d="M168.2 384.9c-15-5.4-31.7-3.1-44.6 6.4c-8.2 6-22.3 14.8-39.4 22.7c5.6-14.7 9.9-31.3 11.3-49.4c1-12.9-3.3-25.7-11.8-35.5C60.4 302.8 48 272 48 240c0-79.5 83.3-160 208-160s208 80.5 208 160s-83.3 160-208 160c-31.6 0-61.3-5.5-87.8-15.1zM26.3 423.8c-1.6 2.7-3.3 5.4-5.1 8.1l-.3 .5c-1.6 2.3-3.2 4.6-4.8 6.9c-3.5 4.7-7.3 9.3-11.3 13.5c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c5.1 0 10.2-.3 15.3-.8l.7-.1c4.4-.5 8.8-1.1 13.2-1.9c.8-.1 1.6-.3 2.4-.5c17.8-3.5 34.9-9.5 50.1-16.1c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9zM144 272a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm144-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm80 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>Ulasan</button>
                            </div>
                            <div class="card-body">
                                <div class="model">
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                </div>
                                <div class="headline">
                                    <p>Tangga</p>
                                </div>
                                <h7 class="card-text">Tangga Lipat</h7>
                                <p>Dimensi Produk :</p>
                                <p>Warna :</p>
                                <p>Bahan Rangka :</p>
                                <p>Bahan Lainnya :</p>
                                <div class="btn">
                                    <button class="btnwhis"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>Whistlist</button>
                                    <button class="btnord"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>Order</button>
                                </div>
                            </div>
                        </div>
                </div>
        </section>
        <section id="testimoni">
            <h2>Tesmoni</h2>
            <section class="products">
                <div class="col-left">
                    <div class="row-top">
                        <div class="corner-text">Produk</div>
                    </div>
                    <div class="row-bottom">
                        <img src="{{ asset('images/kursi bar 1 3.png') }}" alt="Testimoni Picture">
                    </div>
                </div>
                <div class="col-center">
                    <div class="product">
                        <h2>Kursi Kafe / Kursi Bar</h2>
                        <table class="product-details">
                                <tr>
                                    <td>Dimensi Produk</td>
                                    <td class="narrow-column">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="col-d">Panjang</td>
                                    <td class="narrow-column">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="col-d">Lebar kaki bawah</td>
                                    <td class="narrow-column">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="col-d">Lebar kaki atas: 35 cm</td>
                                    <td class="narrow-column">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Warna</td>
                                    <td class="narrow-column">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Bahan Rangka</td>
                                    <td class="narrow-column">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Estimasi Waktu pengerjaan</td>
                                    <td class="narrow-column">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Barang</td>
                                    <td class="narrow-column">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Total pesanan</td>
                                    <td class="narrow-column">:</td>
                                    <td></td>
                                </tr>
                        </table>
                    </div>
                </div>
                <div class="col-right">
                    <div class="testimonial">
                        <h3>Rijal</h3>
                        <h4>Penilaian: ★★★★★</h4>
                        <p>Barang nya mantap sesuai dengan yang saya harapkan, pengerjaan rapih dan tepat
                            waktu, tidak menyesal memilih Bengkel Joyo Welding untuk membuat kursi untuk
                            cafe saya</p>
                    </div>
                    <div class="corner-text right">Selesai</div>
                </div>
            </section>

            <br>

            <section class="testimonials">
                <div class="product2">
                    <div class="row-top">
                        <div class="corner-text">Servic</div>
                        <div class="corner-text right">Selesai</div>
                    </div>
                    <div class="row-bottom">
                        <h4>Fahmi</h4>
                        <h5>Perbaikan Pagar</h5>
                        <h5>Penilaian: ★★★★★</h5>
                        <p>saya sangat puas dengan kinerja joyo royo welding dalam memperbaiki pagar rumah saya yang rusak, hasil pengerjaan, bagus, rapih,
                            dan pengerjaan dilakukan dengan cepat</p>
                    </div>
                </div>

            </section>
        </section>
        <section id="layanan">
            <div class="judpro">
                <h4 class="modal-title">Paling Banyak Dibeli</h4>
            </div>
            <div class="container">
                <div class="row">
                        <div class="card">
                            <div class="card-top">
                                <img class="card-img-top" src="images/warung2.jpg" alt="Card image cap">
                            </div>
                            <div class="btn">
                                <button class="btnulasan"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#4c6687" d="M168.2 384.9c-15-5.4-31.7-3.1-44.6 6.4c-8.2 6-22.3 14.8-39.4 22.7c5.6-14.7 9.9-31.3 11.3-49.4c1-12.9-3.3-25.7-11.8-35.5C60.4 302.8 48 272 48 240c0-79.5 83.3-160 208-160s208 80.5 208 160s-83.3 160-208 160c-31.6 0-61.3-5.5-87.8-15.1zM26.3 423.8c-1.6 2.7-3.3 5.4-5.1 8.1l-.3 .5c-1.6 2.3-3.2 4.6-4.8 6.9c-3.5 4.7-7.3 9.3-11.3 13.5c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c5.1 0 10.2-.3 15.3-.8l.7-.1c4.4-.5 8.8-1.1 13.2-1.9c.8-.1 1.6-.3 2.4-.5c17.8-3.5 34.9-9.5 50.1-16.1c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9zM144 272a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm144-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm80 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>Ulasan</button>
                            </div>
                            <div class="card-body">
                                <div class="model">
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                </div>
                                <div class="headline">
                                    <p>Tangga</p>
                                </div>
                                <h7 class="card-text">Tangga Lipat</h7>
                                <p>Dimensi Produk :</p>
                                <p>Warna :</p>
                                <p>Bahan Rangka :</p>
                                <p>Bahan Lainnya :</p>
                                <div class="btn">
                                    <button class="btnwhis"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>Whistlist</button>
                                    <button class="btnord"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>Order</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-top">
                                <img class="card-img-top" src="images/warung2.jpg" alt="Card image cap">
                            </div>
                            <div class="btn">
                                <button class="btnulasan"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#4c6687" d="M168.2 384.9c-15-5.4-31.7-3.1-44.6 6.4c-8.2 6-22.3 14.8-39.4 22.7c5.6-14.7 9.9-31.3 11.3-49.4c1-12.9-3.3-25.7-11.8-35.5C60.4 302.8 48 272 48 240c0-79.5 83.3-160 208-160s208 80.5 208 160s-83.3 160-208 160c-31.6 0-61.3-5.5-87.8-15.1zM26.3 423.8c-1.6 2.7-3.3 5.4-5.1 8.1l-.3 .5c-1.6 2.3-3.2 4.6-4.8 6.9c-3.5 4.7-7.3 9.3-11.3 13.5c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c5.1 0 10.2-.3 15.3-.8l.7-.1c4.4-.5 8.8-1.1 13.2-1.9c.8-.1 1.6-.3 2.4-.5c17.8-3.5 34.9-9.5 50.1-16.1c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9zM144 272a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm144-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm80 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>Ulasan</button>
                            </div>
                            <div class="card-body">
                                <div class="model">
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                </div>
                                <div class="headline">
                                    <p>Tangga</p>
                                </div>
                                <h7 class="card-text">Tangga Lipat</h7>
                                <p>Dimensi Produk :</p>
                                <p>Warna :</p>
                                <p>Bahan Rangka :</p>
                                <p>Bahan Lainnya :</p>
                                <div class="btn">
                                    <button class="btnwhis"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>Whistlist</button>
                                    <button class="btnord"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>Order</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-top">
                                <img class="card-img-top" src="images/warung2.jpg" alt="Card image cap">
                            </div>
                            <div class="btn">
                                <button class="btnulasan"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#4c6687" d="M168.2 384.9c-15-5.4-31.7-3.1-44.6 6.4c-8.2 6-22.3 14.8-39.4 22.7c5.6-14.7 9.9-31.3 11.3-49.4c1-12.9-3.3-25.7-11.8-35.5C60.4 302.8 48 272 48 240c0-79.5 83.3-160 208-160s208 80.5 208 160s-83.3 160-208 160c-31.6 0-61.3-5.5-87.8-15.1zM26.3 423.8c-1.6 2.7-3.3 5.4-5.1 8.1l-.3 .5c-1.6 2.3-3.2 4.6-4.8 6.9c-3.5 4.7-7.3 9.3-11.3 13.5c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c5.1 0 10.2-.3 15.3-.8l.7-.1c4.4-.5 8.8-1.1 13.2-1.9c.8-.1 1.6-.3 2.4-.5c17.8-3.5 34.9-9.5 50.1-16.1c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9zM144 272a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm144-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm80 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>Ulasan</button>
                            </div>
                            <div class="card-body">
                                <div class="model">
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                </div>
                                <div class="headline">
                                    <p>Tangga</p>
                                </div>
                                <h7 class="card-text">Tangga Lipat</h7>
                                <p>Dimensi Produk :</p>
                                <p>Warna :</p>
                                <p>Bahan Rangka :</p>
                                <p>Bahan Lainnya :</p>
                                <div class="btn">
                                    <button class="btnwhis"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>Whistlist</button>
                                    <button class="btnord"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>Order</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-top">
                                <img class="card-img-top" src="images/warung2.jpg" alt="Card image cap">
                            </div>
                            <div class="btn">
                                <button class="btnulasan"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#4c6687" d="M168.2 384.9c-15-5.4-31.7-3.1-44.6 6.4c-8.2 6-22.3 14.8-39.4 22.7c5.6-14.7 9.9-31.3 11.3-49.4c1-12.9-3.3-25.7-11.8-35.5C60.4 302.8 48 272 48 240c0-79.5 83.3-160 208-160s208 80.5 208 160s-83.3 160-208 160c-31.6 0-61.3-5.5-87.8-15.1zM26.3 423.8c-1.6 2.7-3.3 5.4-5.1 8.1l-.3 .5c-1.6 2.3-3.2 4.6-4.8 6.9c-3.5 4.7-7.3 9.3-11.3 13.5c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c5.1 0 10.2-.3 15.3-.8l.7-.1c4.4-.5 8.8-1.1 13.2-1.9c.8-.1 1.6-.3 2.4-.5c17.8-3.5 34.9-9.5 50.1-16.1c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9zM144 272a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm144-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm80 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>Ulasan</button>
                            </div>
                            <div class="card-body">
                                <div class="model">
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                </div>
                                <div class="headline">
                                    <p>Tangga</p>
                                </div>
                                <h7 class="card-text">Tangga Lipat</h7>
                                <p>Dimensi Produk :</p>
                                <p>Warna :</p>
                                <p>Bahan Rangka :</p>
                                <p>Bahan Lainnya :</p>
                                <div class="btn">
                                    <button class="btnwhis"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>Whistlist</button>
                                    <button class="btnord"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>Order</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-top">
                                <img class="card-img-top" src="images/warung2.jpg" alt="Card image cap">
                            </div>
                            <div class="btn">
                                <button class="btnulasan"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#4c6687" d="M168.2 384.9c-15-5.4-31.7-3.1-44.6 6.4c-8.2 6-22.3 14.8-39.4 22.7c5.6-14.7 9.9-31.3 11.3-49.4c1-12.9-3.3-25.7-11.8-35.5C60.4 302.8 48 272 48 240c0-79.5 83.3-160 208-160s208 80.5 208 160s-83.3 160-208 160c-31.6 0-61.3-5.5-87.8-15.1zM26.3 423.8c-1.6 2.7-3.3 5.4-5.1 8.1l-.3 .5c-1.6 2.3-3.2 4.6-4.8 6.9c-3.5 4.7-7.3 9.3-11.3 13.5c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c5.1 0 10.2-.3 15.3-.8l.7-.1c4.4-.5 8.8-1.1 13.2-1.9c.8-.1 1.6-.3 2.4-.5c17.8-3.5 34.9-9.5 50.1-16.1c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9zM144 272a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm144-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm80 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>Ulasan</button>
                            </div>
                            <div class="card-body">
                                <div class="model">
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                    <span class="fa fa-circle" id=""></span>
                                </div>
                                <div class="headline">
                                    <p>Tangga</p>
                                </div>
                                <h7 class="card-text">Tangga Lipat</h7>
                                <p>Dimensi Produk :</p>
                                <p>Warna :</p>
                                <p>Bahan Rangka :</p>
                                <p>Bahan Lainnya :</p>
                                <div class="btn">
                                    <button class="btnwhis"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>Whistlist</button>
                                    <button class="btnord"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>Order</button>
                                </div>
                            </div>
                        </div>
                </div>
        </section>
        <section id="tentang_kami">
            <h2>Tentang Kami</h2>
            <img src="{{ asset('images/Tentang kami Atas.png')}}" alt="TKA" width="1300" height="300">
			<div class="textTKM">
				<h4>Apa yang Dilakukan Perusahaan dan apa yang perusahaan lakukan untuk konsumen? <br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum euismod urna lorem,
					sit amet ultricies metus aliquet mollis. Cras ornare, lacus eu tempus molestie,
					erat metus feugiat magna, eget malesuada erat ipsum vel lorem. Quisque egestas mi vitae
					vestibulum ultricies. Etiam ac tempor ipsum. Vestibulum scelerisque cursus leo ut blandit.
					Vivamus eleifend dui vel arcu molestie, vitae finibus nisi ultrices. Nullam iaculis lorem lacinia nisi tincidunt,
					a aliquam augue vulputate. Nullam orci dolor, cursus et turpis eget, cursus cursus erat. Vivamus sed pretium mi.
					Aliquam molestie, ex et auctor laoreet, mauris diam pellentesque quam, vitae consectetur mauris magna nec mi.</p>
				</h4>
                <img src="{{ asset('images/kemal-kozbaev-mun6ABiRJws-unsplash 1.png')}}" alt="TKA1" width="455" height="300">
			</div>

			<div class="textTKM1">
				<h4>PORTOFOLIO</h4>
			</div>
			<div class="textTKM2" >
				<div class="portfolio-group">
					<img src="{{ asset('images/portopolio 1.png')}}" alt="Por1" width="355" height="200" >
					<img src="{{ asset('images/portopolio 2.png')}}" alt="Por2" width="355" height="250" >
				</div>
				<div class="portfolio-group">
					<img src="{{ asset('images/portopolio 3.png')}}" alt="Por3" width="320" height="460">
				</div>
				<div class="portfolio-group">
					<img src="{{ asset('images/portopolio 4.png')}}" alt="Por4" width="355" height="250">
					<img src="{{ asset('images/portopolio 5.png')}}" alt="Por5" width="355" height="200">
				</div>
			</div>
			<br><br>

			<div class="textTKM3">
				<h4>PRINSIP KAMI</h4>
			</div>

			<div class="textTKM4">
				<table class="table">
					<tr>
                        <td class="d-flex align-items-center" style="background-color: #3183FF;">
                            <img src="{{ asset('images/kualitas unggul.png')}}" alt="Kualitas" width="50" height="50" style="margin-right: 10px;">
                            <div class="ml-3">
                                <h5 style="margin-bottom: 5px; margin-top: 2px;">KUALITAS UNGGUL</h5>
                                <p style="margin: 0; margin-top: 2px;">kami berkomitmen memberikan layanan berkualitas tinggi dan memastikan kepuasan pelanggan .</p>
                            </div>
                        </td>
                    </tr>

					<tr>
						<td class="d-flex align-items-center" style="background-color: #FFFFFF;">
							<img src="{{ asset('images/data aman.png')}}" alt="Kualitas" width="50" height="50" style="margin-right: 10px;">
							<div class="ml-3">
                                <h5 style="margin-bottom: 5px; margin-top: 2px;">DATA AMAN SEPENUHNYA</h5>
                                <p style="margin: 0; margin-top: 2px;">kami menjaga dengan cermat dan kuat keamanan data pelanggan , sehingga anda bisa merasa tenang .</p>
                            </div>
                        </td>
					</tr>

					<tr>
						<td class="d-flex align-items-center" style="background-color: #56A085">
							<img src="{{ asset('images/innovation.png')}}" alt="Kualitas" width="50" height="50" style="margin-right: 10px;">
							<div class="ml-3">
                                <h5 style="margin-bottom: 5px; margin-top: 2px;">INOVASI TANPA HENTI</h5>
                                <p style="margin: 0; margin-top: 2px;">kami selalu berinovasi untuk memberikan solusi terbaik dan tetap relevan bagi pelanggan dan bengkel welding 'joyo royo'.</p>
                            </div>
                            </td>
					</tr>

					<tr>
						<td class="d-flex align-items-center" style="background-color: #A8A8A8;">
							<img src="{{ asset('images/kolaborasi.png')}}" alt="Kualitas" width="50" height="50" style="margin-right: 10px;">
							<div class="ml-3">
                                <h5 style="margin-bottom: 5px; margin-top: 2px;">KOLABORASI KUAT</h5>
                                <p style="margin: 0; margin-top: 2px;">kami bekerja sama erat dengan bengkel welding 'joyo royo' dan pelanggan untuk mencapai hasil optimal .</p>
                            </div>
                        </td>
					</tr>

					<tr>
						<td class="d-flex align-items-center" style="background-color: #FF5C00;">
							<img src="{{ asset('images/kepuasan pelanggan.png')}}" alt="Kualitas" width="50" height="50" style="margin-right: 10px;">
							<div class="ml-3">
                                <h5 style="margin-bottom: 5px; margin-top: 2px;">KEPUASAN PELANGGAN SELALU TERDEPAN</h5>
                                <p style="margin: 0; margin-top: 2px;">kepuasan pelanggan adalah yang utama . kami mendengarkan umpan balik pelanggan dan terus meningkatkan layanan kami .</p>
                            </div>
                        </td>
					</tr>
				</table>
			</div>
        </section>
        {{-- @include('tentang_kami') --}}
    </main>

    <footer>
        <div class="contact-info">
            <h3>Kontak</h3>
            <p><svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#d2b960" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg> Jl. Contoh No. 123</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#d2b960" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>+62 123 4567 8901</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#d2b960" d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg> info@joyoroyo.com</p>
        </div>
        <div class="feature-info">
            <h3>Fitur</h3>
            <ul>
                <li><a href="#produk" style="color: #E9DB9C;">PRODUK</a></li>
                <li><a href="#testimoni" style="color: #E9DB9C;">TESTIMONI</a></li>
                <li><a href="#layanan" style="color: #E9DB9C;">LAYANAN</a></li>
				<li><a href="#tentang_kami" style="color: #E9DB9C;">TENTANG KAMI</a></li>
            </ul>
        </div>
        <div class="social-media">
            <h3>Sosial Media</h3>
            <div class="social-icon">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="34" width="34" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#d2b960" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"/></svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#d2b960" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>
</html>
