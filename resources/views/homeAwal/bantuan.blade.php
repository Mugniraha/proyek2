<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo welding .png')}}" type="image/x-icon">
    <title>JOYO ROYO</title>
    <link rel="stylesheet" href="{{ asset('css/homeAwal.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}

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
        <section id="tentang_kami">
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
			</div>

			<div class="textTKM1">
				<h4>PORTOFOLIO</h4>
			</div>

			<div class="textTKM3">
				<h4>PRINSIP KAMI</h4>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


</body>
</html>
