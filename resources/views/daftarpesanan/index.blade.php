@extends('user-layout.nav-user')
@section('konten')
        <section id="productspes">
            <div class="btn-top">
                <a href="{{ route('daftarpesanan.riwayat') }}"><button class="btnriwayat">Riwayat Pesanan</button></a>
<<<<<<< HEAD
=======

>>>>>>> 23f680b71ac630b86ed97fa0d9c7a0f3f80e469f
                <a href="{{ route('daftarpesanan.riwayatService') }}"><button class="btnriwayat">Riwayat Service</button></a>
                <hr>
            </div>
        @foreach($dataPesanan as $pesanan)
        <div class="container">
            <div class="row">
                <div class="cardpes">
                    <div class="card-top">
                        <div class="left-text">
                            <h6><i>JOYO ROYO BENGKEL WELDING</i></h6>
                        </div>
                        <div class="right-text">
                            <p>Status Pesnan</p>
                            <div class="vertical-line"></div>
                            <p class="idpesanan">{{ $pesanan->idPesanan }}</p>
                        </div>
                    </div>
                    <div class="card-center">
                        <div class="center-col">
                            <table class="product-details">
                                <tr>
                                    <td  class="colhead" colspan="3">{{ $pesanan->namaPesanan }}</td>
                                </tr>
                                <tr>
                                    <td>Warna</td>
                                    <td class="narrow-column">:</td>
                                    <td>{{ $pesanan->warna}}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Barang</td>
                                    <td class="narrow-column">:</td>
                                    <td>{{ $pesanan->jumlahItem }}</td>
                                </tr>
                                <tr>
                                    <td>Total Harga</td>
                                    <td class="narrow-column">:</td>
                                    <td>{{ $pesanan->totalHarga }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="right-col">
                            <div class="dp-payment">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><i>Harga DP :</i></td>
                                            <td class="gap" rowspan="2">
                                            </td>
                                            <td class="status-payment" rowspan="2"><i>Sudah Dibayar</i></td>
                                        </tr>
                                        <tr>
                                            <td>{{ $pesanan->totalHarga / 2 }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="payment">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><i>Belum dibayar</i></td>
                                            <td>:</td>
                                            <td class="pricefull"> {{ $pesanan->totalHarga}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-bottom">
                        <div class="btn-left">
                            <button type="button" class="btn btnprogres dropdown-toggle" id="toggleButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Progres Barang
                            </button>
                            <div class="dropdown-menu" aria-labelledby="toggleButton" style="background-color: #f4f5f7">
                                <div class="card-progres" id="cardProgres">
                                    <table class="progres-barang">
                                        <thead>
                                            <tr>
                                                <th colspan="3">25%</th>
                                                <th colspan="3">50%</th>
                                                <th colspan="3">75%</th>
                                                <th colspan="3">100%</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td colspan="3"><img class="card-img-left" src="images/portopolio 1.png" alt="Card image cap" width=75px height=75px></td>
                                                <td colspan="3"></td>
                                                <td colspan="3"><img class="card-img-left" src="images/portopolio 1.png" alt="Card image cap" width=75px height=75px></td>
                                            </tr>
                                            <tr>
                                                <td>Keterangan</td>
                                                <td>:</td>
                                                <td></td>
                                                <td>Keterangan</td>
                                                <td>:</td>
                                                <td></td>
                                                <td>Keterangan</td>
                                                <td>:</td>
                                                <td></td>
                                                <td>Keterangan</td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Update</td>
                                                <td>:</td>
                                                <td></td>
                                                <td>Tanggal Update</td>
                                                <td>:</td>
                                                <td></td>
                                                <td>Tanggal Update</td>
                                                <td>:</td>
                                                <td></td>
                                                <td>Tanggal Update</td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                // Dapatkan elemen tombol dan card-progres
                                const toggleButton = document.getElementById('toggleButton');
                                const cardProgres = document.getElementById('cardProgres');

                                // Tambahkan event listener untuk menampilkan card-progres saat tombol diklik
                                toggleButton.addEventListener('click', function() {
                                    // Cek apakah card-progres sedang ditampilkan
                                    const isCardVisible = cardProgres.classList.contains('show');

                                    // Toggle tampilan card-progres berdasarkan kondisi saat ini
                                    if (!isCardVisible) {
                                        // Tampilkan card-progres
                                        cardProgres.classList.add('show');
                                    } else {
                                        // Sembunyikan card-progres
                                        cardProgres.classList.remove('show');
                                    }
                                });
                            });
                        </script>


                        {{-- <div class="btn-right">
                            <a href="{{ route('costumproduk.index', ['idProduk' => $produk->idProduk]) }}"><button class="btnagain">Order Lagi</button></a>
                            <a href="{{ route('costumproduk.index', ['idProduk' => $produk->idProduk]) }}"><button class="btncall">Pembayaran</button></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </section>
