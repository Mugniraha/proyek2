@extends('user-layout.nav-user')
@section('konten')
        <section id="productspes">
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
                            <div class="dropdown-menu" aria-labelledby="toggleButton">
                                <div class="card-progres" id="cardProgres">
                                    <p>ini konten dropdown</p>
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
                            <button class="btnagain">Order Lagi</button>
                            <button class="btncall">Hubungi Pembuat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>