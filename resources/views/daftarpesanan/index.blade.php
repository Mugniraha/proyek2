@extends('user-layout.nav-user')
@section('konten')
        <section id="productspes">
            <div class="btn-top">
                <a href="{{ route('daftarpesanan.riwayat') }}"><button class="btnriwayat">Riwayat Pesanan</button></a>
                <hr>
            </div>
            
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
                            <p>Detail Pesnan</p>
                        </div>
                    </div>
                    <div class="card-center">
                        <div class="left-col">
                            <img class="card-img-left" src="images/" alt="Card image cap">
                        </div>
                        <div class="center-col">
                            <table class="product-details">
                                <tr>
                                    <td>Dimensi Produk</td>
                                    <td class="narrow-column">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="col-d">Panjang</td>
                                    <td class="narrow-column">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="col-d">Lebar</td>
                                    <td class="narrow-column">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="col-d">Tinggi</td>
                                    <td class="narrow-column">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Warna</td>
                                    <td class="narrow-column">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Bahan Rangka</td>
                                    <td class="narrow-column">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Barang</td>
                                    <td class="narrow-column">:</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>                        
                        <div class="right-col">
                            <h5><i>Total Harga : </i>RP. 200.000</h5>
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
                        
                        
                        <div class="btn-right">
                            <a href="{{ route('costumproduk.index') }}"><button class="btnagain">Order Lagi</button></a>
                            <a href="{{ route('costumproduk.index') }}"><button class="btncall">Hubungi Pembuat</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>