@extends('user-layout.nav-produk')
@section('konten')
    <section id="productscos">
        @if ($pesanan !== null && $produk !== null && $pengiriman !== null && $bahan !== null)
        <div class="payment-container">
            <div class="payment-top">
                <div class="judul">
                    <p>PEMBAYARAN DP</p>
                </div>
                <div class="kodepesanan">
                    <p>{{ $pesanan->idPesanan }}</p>
                </div>
            </div>
            <div class="payment-center">
                <hr>
                <div class="center-top">
                    <img class="card-img-top" src="{{ asset('storage/img/'.$produk->gambar) }}" alt="Card image cap">
                    <div class="keterangan">
                        <table class="product-keterangan">
                            <tr>
                                <td class="col-c">{{ $pesanan->namaPesanan }}</td>
                            </tr>
                            <tr>
                                <td>{{ $pesanan->deskripsiPesanan }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="center-col-deskripsi">
                    <table class="product-details-payment">
                        <tr>
                            <td>Dimensi Produk</td>
                            <td class="narrow-column">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="col-d">Panjang</td>
                            <td class="narrow-column">:</td>
                            <td>{{ $pesanan->panjang }}</td>
                        </tr>
                        <tr>
                            <td class="col-d">Lebar</td>
                            <td class="narrow-column">:</td>
                            <td>{{ $pesanan->lebar }}</td>
                        </tr>
                        <tr>
                            <td class="col-d">Tinggi</td>
                            <td class="narrow-column">:</td>
                            <td>{{ $pesanan->tinggi }}</td>
                        </tr>
                        <tr>
                            <td>Warna</td>
                            <td class="narrow-column">:</td>
                            <td>{{ $pesanan->warna }}</td>
                        </tr>
                        <tr>
                            <td>Bahan Rangka</td>
                            <td class="narrow-column">:</td>
                            <td>{{ $bahan->namaBahan }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Barang</td>
                            <td class="narrow-column">:</td>
                            <td>{{ $pesanan->jumlahItem }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Pemesanan</td>
                            <td class="narrow-column">:</td>
                            <td>{{ $pesanan->tanggalPemesanan }}</td>
                        </tr>
                        <tr>
                            <td>Metode Pengiriman</td>
                            <td class="narrow-column">:</td>
                            <td>{{ $pengiriman->jenisPengiriman }}</td>
                        </tr>
                        <tr>
                            <td>Total Harga</td>
                            <td class="narrow-column">:</td>
                            <td>{{ $pesanan->totalHarga }}</td>
                        </tr>
                    </table>
                    <div class="dp-price-payment">
                        <table>
                            <tbody>
                                <tr>
                                    <td><i>Harga DP</i></td>
                                    <td class="gap" rowspan="2">:</td>
                                    <td class="dp-price" rowspan="2"><i>{{ $pesanan->totalHarga / 2 }}</i></td>
                                </tr>
                            </tbody>
                        </table>     
                    </div>
                </div>
            </div>
            <div class="payment-bottom">
                <hr>
                <div class="btn-payment-dp">
                    <a href="#"><button class="btndp">Menunggu Veirifikasi</button></a>
                </div>
            </div>
        </div> 
        @else
        <p>Data tidak ditemukan</p>
        @endif    
    </section>                