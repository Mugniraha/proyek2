<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOYO ROYO</title>
    <link rel="stylesheet" href="{{ asset('css/homeAwal.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
</head>
<body>
    <div class="container">

        <div class="logo-and-title">
            <img src="{{ asset('images/logo welding .png')}}" alt="Logo" width="30" height="24" class="bg">
            <strong>JOYO ROYO</strong>
        </div>
        <div class="search-bar">
            <input class="form-control me-2" type="search" placeholder="Cari Barang Anda" aria-label="Search" >
            <button class="btn btn-light" type="submit">
                <img src="{{ asset('images/cari.png')}}" alt="Cari" width="20" height="20">
            </button>
        </div>
        <div class="log">
            <img src="{{ asset('images/profil.png')}}" alt="Logo" width="25" height="22" class="d-inline-block align-text-top">
            <a href="{{ route('loginIndex') }}" id="loginBtn" style="text-decoration: none;">Login</a>
            <img src="{{ asset('images/love.png')}}" alt="Logo" width="25" height="22" class="d-inline-block align-text-top">
            <a href="halaman_favorit.html" id="favoriteBtn" style="text-decoration: none;">Favorite</a>
        </div>
    </div>

    <header>
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
		<br>
		<img src="{{ asset('images/Pagar-Rumah-Minimalis-dengan-Tipe-Geser.jpg')}}" alt="Cari" width="550" height="300">
		<img src="{{ asset('images/Set-Kursi-Cafe-Besi-Meja-Bundar.jpg')}}" alt="Cari" width="300" height="300">
		<img src="{{ asset('images/Lampu-Hias-Gantung.jpg')}}" alt="Cari" width="455" height="300">
        <section id="produk">
            <h2>Produk</h2>
            <!-- Your produk content goes here -->
        </section>
        <section id="testimoni">
            <h2>Tesmoni</h2>
            <!-- Your tesmoni content goes here -->
        </section>
        <section id="layanan">
            <h2>Layanan</h2>
            <!-- Your layanan content goes here -->
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
					<tr style="background-color: #3183FF;">
						<td class="d-flex align-items-center">
							<img src="{{ asset('images/kualitas unggul.png')}}" alt="Kualitas" width="50" height="50" style="margin-right: 10px;">
                            <div class="ml-3">
                                <h5 style="margin-bottom: 5px; margin-top: 2px;">KUALITAS UNGGUL</h5>
                                <p style="margin: 0; margin-top: 2px;">kami berkomitmen memberikan layanan berkualitas tinggi dan memastikan kepuasan pelanggan .</p>
                            </div>
                        </td>
					</tr>

					<tr style="background-color: #FFFFFF;">
						<td class="d-flex align-items-center">
							<img src="{{ asset('images/data aman.png')}}" alt="Kualitas" width="50" height="50" style="margin-right: 10px;">
							<div class="ml-3">
                                <h5 style="margin-bottom: 5px; margin-top: 2px;">DATA AMAN SEPENUHNYA</h5>
                                <p style="margin: 0; margin-top: 2px;">kami menjaga dengan cermat dan kuat keamanan data pelanggan , sehingga anda bisa merasa tenang .</p>
                            </div>
                        </td>
					</tr>

					<tr style="background-color: #56A085">
						<td class="d-flex align-items-center">
							<img src="{{ asset('images/innovation.png')}}" alt="Kualitas" width="50" height="50" style="margin-right: 10px;">
							<div class="ml-3">
                                <h5 style="margin-bottom: 5px; margin-top: 2px;">INOVASI TANPA HENTI</h5>
                                <p style="margin: 0; margin-top: 2px;">kami selalu berinovasi untuk memberikan solusi terbaik dan tetap relevan bagi pelanggan dan bengkel welding 'joyo royo'.</p>
                            </div>
                            </td>
					</tr>

					<tr style="background-color: #A8A8A8;">
						<td class="d-flex align-items-center">
							<img src="{{ asset('images/kolaborasi.png')}}" alt="Kualitas" width="50" height="50" style="margin-right: 10px;">
							<div class="ml-3">
                                <h5 style="margin-bottom: 5px; margin-top: 2px;">KOLABORASI KUAT</h5>
                                <p style="margin: 0; margin-top: 2px;">kami bekerja sama erat dengan bengkel welding 'joyo royo' dan pelanggan untuk mencapai hasil optimal .</p>
                            </div>
                        </td>
					</tr>

					<tr style="background-color: #FF5C00;">
						<td class="d-flex align-items-center">
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
    </main>
    <footer>
        <div class="contact-info">
            <h3>Kontak</h3>
            <p><img src="{{ asset('images/alamat.png')}}" alt="alamat" width="33" height="33"> Jl. Contoh No. 123</p>
            <p><img src="{{ asset('images/wa.png')}}" alt="alamat" width="30" height="30"> +62 123 4567 8901</p>
            <p><img src="{{ asset('images/email.png')}}" alt="alamat" width="30" height="30"> info@joyoroyo.com</p>
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
                <a href="#"><img src="{{ asset('images/Mask group.png') }}" alt="Facebook"></a>
                <a href=""><img src="{{ asset('images/Mask group1.png') }}" alt="Instagram"></a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}
</body>
</html>
