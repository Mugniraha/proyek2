<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Konfirmasi Pemanggilan</title>
        <link rel="stylesheet" href="{{ asset('css/konfirmasi.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>

    <body>
		<div class="konten2 col py-3 p-5">
			<div class="awal" >
				<div class="container rounded p-5">
					<div class="icon-and-text">
						<svg xmlns="http://www.w3.org/2000/svg" height="55" width="26" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
						<h5>Permintaan Anda telah berhasil diterima.</h5>
					</div>
					<h6 class="text">Pilih Notifikasi untuk melihat konfirmasi permintaan lebih lanjut</h6>
					<br>
					<a href="{{ route('HomeUserIndex') }}" type="button" class="btn btn-primary" style="background-color: #4C6687; color: white; margin-left: 30%;">Beranda</a>
					<a href="{{ route('NotifikasiIndex') }}" type="button" class="btn btn-primary" style="background-color: #4C6687; color: white; margin-left: 10%; ">Notifikasi</a>
                </div>
            </div>
		</div>
    </body>
</html>

