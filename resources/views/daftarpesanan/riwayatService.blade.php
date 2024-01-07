@extends('user-layout.nav-user')
@section('konten')
        <section id="productspes">
            <div class="btn-top">
                <a href="{{ route('daftarpesanan.index') }}"><button class="btnriwayat">Kembali</button></a>
                <hr>
            </div>
            @foreach($dataService as $form)
            @if($form->status == 'Selesai')
        <div class="container">
            <div class="row">
                <div class="cardpes">
                    <div class="card-top">
                        <div class="left-text">
                            <h6><i>JOYO ROYO BENGKEL WELDING</i></h6>
                        </div>
                        <div class="right-text">
                            <p class="status">{{ $form->status }}</p>
                                <div class="vertical-line"></div>
                                <p class="idjasa">ID:{{ $form->idJasa }}</p>
                        </div>
                    </div>
                    <div class="card-center">
                        <div class="center-col">
                            <table class="product-details">
                                <table class="product-details">
                                        <tr>
                                            <td>Nama Jasa</td>
                                            <td class="narrow-column">:</td>
                                            <td>{{ $form->namaJasa }}</td>
                                        </tr>
                                    <tr>
                                        <td>Kategori Jasa</td>
                                        <td class="narrow-column">:</td>
                                        <td>{{ $form->kategoriJasa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi Masalah</td>
                                        <td class="narrow-column">:</td>
                                        <td>{{ $form->deskripsiJasa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi</td>
                                        <td class="narrow-column">:</td>
                                        <td>{{ $form->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Pengerjaan</td>
                                        <td class="narrow-column">:</td>
                                        <td>{{ $form->tanggal }}</td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else

            @endif
            @endforeach
        </section>
        @endsection
