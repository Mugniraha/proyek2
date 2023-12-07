@extends('user-layout.nav-user')
@section('konten')
        <section id="productspes">

			<div class="breadcrumb-item active" style="font-size: 22px" aria-current="page">Konfirmasi Pesanan</div>

    <div class="accordion" id="accordionExample">
		<div class="accordion-item">
		  <h2 class="accordion-header">
			<button class="accordion-button custom-bg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				<div class="container">
					<h5>Konfirmasi Pesanan</h5>
					<p>Permintaan dengan no. 123456 telah diterima</p>
					<!-- <ol>
						<li aria-current="page">5-10-2023 14.00</li>
					</ol> -->
					<p class="breadcrumb-item-custom">5-10-2023 14.00</p>
				</div>
			</button>
		  </h2>
		  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
			<div class="accordion-body">
			  <strong>Selamat datang dilayanan jasa kami</strong>

				<p>Nomor Referensi Permintaan: #123456</p>

				<p>Konfirmasi Pesanan:<br>
				Permintaan Anda untuk layanan jasa telah berhasil diterima. Kami sangat menghargai<br>
			kepercayaan Anda kepada kami.</p>

			  <strong>Ringkasan Detail</strong>
        <ul>
            <li>Jenis Jasa: Pemasangan Tralis</li>
            <li>Deskripsi Masalah: Perlu pemasangan tralis di jendela depan.</li>
            <li>Lokasi: Jalan Contoh No. 123, Kota Contoh</li>
            <li>Tanggal Pemasangan: 15 November 2023</li>
        </ul>

        <strong>Informasi Kontak</strong>
        <p>Jika Anda memiliki pertanyaan atau perlu melakukan perubahan pada permintaan Anda,<br>
					silakan hubungi kami di [joyoroyo@gmail.com] atau [+62 899 998 999].</p>
        <p>Nama: [Nama Anda]</p>
        <p>Nomor Telepon: [Nomor Telepon Anda]</p>

        <strong>Jadwal Selanjutnya</strong>
        <p>Tim kami akan segera menghubungi Anda untuk mengonfirmasi jadwal pemasangan tralis.<br>
				Mohon bersiap-siap untuk proses selanjutnya.</p>
        <p>Terima kasih atas kepercayaan Anda kepada kami. Kami berkomitmen untuk memberikan <br>
					layanan terbaik untuk Anda.</p>

				<strong>Hormat kami,</strong>
				<p>[Tim Layanan Jasa Kami]</p>
			</div>
		  </div>
		</div>
	  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </section>
