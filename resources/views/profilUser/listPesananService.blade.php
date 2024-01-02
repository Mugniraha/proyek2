@extends('user-layout.nav-user')
@section('konten')
        <section id="productspes">
		<div class="container">
			<div class="user-name">
				<h4>Pemanggilan Jasa Service</h4>
			</div>

            <div class="flex-container">
                @foreach($form_js as $jasa)
                    <div class="row-top">
                        <div class="content-container">
                            <img src="{{ asset('images/servic1.png') }}" alt="Service Picture">
                            <p>Service Pemasangan dan Perbaikan Gerbang Rumah</p>
                            <p>Nama Jasa: {{ $jasa->namaJasa }}</p>
                            <p>Kategori Jasa: {{ $jasa->kategoriJasa }}</p>
                            <p>Deskripsi Masalah: {{ $jasa->deskripsiJasa }}</p>
                            <p>Lokasi: {{ $jasa->alamat }}</p>
                            <p>Tanggal Pengerjaan: {{ $jasa->tanggal }}</p>
                        </div>

                    </div>
                @endforeach
            </div>
		</div>
        </section>


