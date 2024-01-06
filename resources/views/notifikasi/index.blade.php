@extends('user-layout.nav-user')
@section('konten')
    <section id="productspes">
        @foreach ($dataPesanan as $service)
        <div class="breadcrumb-item active" style="font-size: 22px" aria-current="page">Konfirmasi Pesanan</div>
        <div class="accordion" id="accordionExample">

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button custom-bg" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $service->idJasa }}" aria-expanded="true" aria-controls="collapse{{ $service->idJasa }}"
                                onclick="toggleText('{{ $service->idJasa }}')">
                            <div class="container">
                                <h5>Konfirmasi Pesanan</h5>
                                <p>Permintaan dengan no. {{ $service->idJasa }} telah diterima</p>
                                <p class="breadcrumb-item-custom">{{ $service->updated_at->format('d-m-Y') }}</p>
                            </div>
                        </button>
                        <script>
                            function toggleText(idJasa) {
                                // Ganti teks atau tambahkan logika lain jika diperlukan
                                console.log("Button dengan idJasa " + idJasa + " diklik!");
                            }
                        </script>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Selamat datang di layanan jasa kami</strong><br>

                        <strong>Ringkasan Detail</strong>
                        <ul>
                            <li>Jenis Jasa: {{ $service->namaJasa }}</li>
                            <li>Deskripsi Masalah: {{ $service->deskripsiJasa }}</li>
                            <li>Lokasi: {{ $service->alamat }}</li>
                            <li>Tanggal Pengerjaan: {{ $service->tanggal }}</li>
                        </ul>

                        <strong>Informasi Kontak</strong>
                        <p>Jika Anda memiliki pertanyaan atau perlu melakukan perubahan pada permintaan Anda,<br>
                            silakan hubungi kami di [joyoroyo@gmail.com] atau [+62 899 998 999].</p>
                        <p>Nama: {{ Auth::user()->name }}</p>
                        <p>Nomor Telepon: {{ Auth::user()->telp }}</p>

                        <strong>Hormat kami,</strong>
                        <p>[Tim Layanan Jasa Kami]</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous"></script>
    </section>
@endsection
