<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOYO ROYO</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">

        <div class="logo-and-title">
            <img src="logo welding .png" alt="Logo" width="30" height="24" class="bg">
            <strong>JOYO ROYO</strong>
        </div>
        <div class="search-bar">
            <input class="form-control me-2" type="search" placeholder="Cari Barang Anda" aria-label="Search" >
            <button class="btn btn-light" type="submit">
                <img src="cari.png" alt="Cari" width="20" height="20">
            </button>
        </div>
        <div>
            <img src="profil.png" alt="Logo" width="25" height="22" class="d-inline-block align-text-top">
            <a href="halaman_login.html" id="loginBtn">Login</a>
            <img src="love.png" alt="Logo" width="25" height="22" class="d-inline-block align-text-top">
            <a href="halaman_favorit.html" id="favoriteBtn">Favorite</a>
        </div>
    </div>

    <header>
        <nav>
            <ul>
				<li><a href="#" class="fitur">HOME</a></li>
                <li><a href="#" class="fitur">PRODUK</a></li>
                <li><a href="#" class="fitur">TESTIMONI</a></li>
                <li><a href="#" class="fitur">LAYANAN</a></li>
                <li><a href="#" class="fitur">TENTANG KAMI</a></li>
            </ul>
        </nav>
    </header>
    <main>
		<br>
		<img src="Pagar-Rumah-Minimalis-dengan-Tipe-Geser.jpg" alt="Cari" width="550" height="300">
		<img src="Set-Kursi-Cafe-Besi-Meja-Bundar.jpg" alt="Cari" width="300" height="300">
		<img src="Lampu-Hias-Gantung.jpg" alt="Cari" width="455" height="300">
        <section>
            <h2>Produk</h2>
            <!-- Your produk content goes here -->
        </section>
        <section>
            <h2>Tesmoni</h2>
            <!-- Your tesmoni content goes here -->
        </section>
        <section>
            <h2>Layanan</h2>
            <!-- Your layanan content goes here -->
        </section>
        <section>
            <h2>Tentang Kami</h2>
            <!-- Your tentang kami content goes here -->
        </section>
    </main>
    <footer>
        <div class="contact-info">
            <h3>Kontak</h3>
            <p>Alamat: Jl. Contoh No. 123</p>
            <p>WA: +62 123 4567 8901</p>
            <p>Email: info@joyoroyo.com</p>
        </div>
        <div class="feature-info">
            <h3>Fitur</h3>
            <ul>
                <li><a href="#">PRODUK</a></li>
                <li><a href="#">TESTIMONI</a></li>
                <li><a href="#">LAYANAN</a></li>
				<li><a href="#">TENTANG KAMI</a></li>
            </ul>
        </div>
        <div class="social-media">
            <h3>Sosial Media</h3>
            <a href="#" class="social-icon"><img src="{{ asset('images/facebook.png') }}" alt="Facebook"></a>
            <a href="#" class="social-icon"><img src="{{ asset('images/instagram.png') }}" alt="Instagram"></a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
