@extends('user-layout.nav-produk')
@section('konten')

        <section id="productscos">
        <div class="container">
            <div class="row">
            @if ($produk !== null)
                <div class="cardcos">
                    <div class="card-left">
                        <img class="card-img-left" src="{{ asset('storage/img/'.$produk->gambar) }}" alt="Card image cap">
                    </div>
                    <div class="card-center">
                        <h6>Deskripsi Produk</h6>
                        <p>{{ $produk->deskripsi_produk }}</p><hr>
                        <p>Dimensi Produk :</p>
                        <p>Lebar : {{ $produk->lebar }}</p>
                        <p>Panjang : {{ $produk->panjang }}</p>
                        <p>Tinggi: {{ $produk->tinggi }}</p>
                        <div class="price">
                            <h2>{{ $produk->namaProduk }}</h2>
                            <h3><i>RP.</i>{{ $produk->harga }}</h3>
                        </div>
                        <div class="btn">
                            <button class="btnord"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#4c6687" d="M168.2 384.9c-15-5.4-31.7-3.1-44.6 6.4c-8.2 6-22.3 14.8-39.4 22.7c5.6-14.7 9.9-31.3 11.3-49.4c1-12.9-3.3-25.7-11.8-35.5C60.4 302.8 48 272 48 240c0-79.5 83.3-160 208-160s208 80.5 208 160s-83.3 160-208 160c-31.6 0-61.3-5.5-87.8-15.1zM26.3 423.8c-1.6 2.7-3.3 5.4-5.1 8.1l-.3 .5c-1.6 2.3-3.2 4.6-4.8 6.9c-3.5 4.7-7.3 9.3-11.3 13.5c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c5.1 0 10.2-.3 15.3-.8l.7-.1c4.4-.5 8.8-1.1 13.2-1.9c.8-.1 1.6-.3 2.4-.5c17.8-3.5 34.9-9.5 50.1-16.1c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9zM144 272a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm144-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm80 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>Ulasan</button>
                        </div>
                    </div>
                    
                    <div class="card-right">
                        <form action="{{ route('costumproduk.store')}}" method="POST">
                            @csrf
                            <div class="inputProduk">
                                <input type="text" class="form-control" id="namaPesanan" name="namaPesanan" placeholder="{{ $produk->namaProduk }}" value="{{ $produk->namaProduk }}" readonly>
                                <input type="hidden" name="namaPesanan" value="{{ $produk->namaProduk }}">
                            </div>
                            <div class="input1">
                                <div class="mb-3">
                                    <label for="bahan" class="form-label">Bahan :</label>
                                    <select class="form-select" id="bahan" name="pilihan_bahan">
                                        <option value="" selected disabled>Pilih Salah Satu Bahan</option>
                                        <option value="1">Baja</option>
                                        <option value="2">Holow</option>
                                        <option value="3">Alumunium</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="warna" class="form-label">Warna :</label>
                                    <select class="form-select" id="pilihan_warna" name="pilihan_warna">
                                        <option value="" selected disabled>Pilih Salah Satu Warna</option>
                                        <option value="Hitam">Hitam</option>
                                        <option value="Silver">Silver</option>
                                        <option value="Putih">Putih</option>
                                    </select>
                                </div>
                            </div>
                            <div class="size">
                                <div class="mb-4">
                                    <label for="panjang" class="form-label">Panjang</label>
                                    <input type="number" class="form-control" id="panjang" name="panjang" placeholder="{{ $produk->panjang }}" value="">
                                </div>
                                <div class="mb-4">
                                    <label for="lebar" class="form-label">Lebar</label>
                                    <input type="number" class="form-control" id="lebar" name="lebar" placeholder="{{ $produk->lebar }}" value="">
                                </div>
                                <div class="mb-4">
                                    <label for="tinggi" class="form-label">Tinggi</label>
                                    <input type="number" class="form-control" id="tinggi" name="tinggi" placeholder="{{ $produk->tinggi }}" value="">
                                </div>
                            </div>
                            <div class="input2">
                                <div class="mb-4">
                                    <table>
                                        <tr>
                                            <td><label for="jumlahItem" class="form-label">Jumlah Pesanan :</label></td>
                                        </tr>
                                        <tr>
                                            <td> <input type="number" class="form-control" id="jumlahItem" name="jumlahItem" placeholder="" value=""></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="mb-3">
                                    <table>
                                        <tr>
                                            <td><input type="radio" class="form-control" id="pengiriman" name="pengiriman" placeholder="" value="1"></td>
                                            <td class="jenisJasa">Jasa Antar <i style="color: #f8f989">Rp. 30.000</i></td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" class="form-control" id="pengiriman" name="pengiriman" placeholder="" value="2"></td>
                                            <td class="jenisJasa">Ambil Ditempat</td>
                                        </tr>
                                    </table>
                                </div>
                                
                            </div>
                            <div class="input3">
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Keterangan Tambahan</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="6" placeholder="Masukkan deskripsi"></textarea>
                                </div>
                                <div class="mb-3">
                                    <table>
                                        <tr>
                                            <td class="labelharga"><label for="totalHarga" class="form-label">Total Harga</label></td>
                                            <td></td>
                                            <td class="totalharga">Rp.
                                                <input type="number" class="form-control" id="totalHarga" name="totalHarga" placeholder="{{ $produk->harga }}" value="" readonly>
                                                <input type="hidden" class="form-control" name="totalHarga" value="{{ $produk->harga }}">
                                                <input type="hidden" class="form-control" name="idProduk" value="{{ $produk->idProduk }}">
                                            </td>
                                        </tr>
                                    </table>
                                    
                    
                                </div>
                                <div class="btnform">
                                    <button type="submit" class="btnwishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                            <!-- Icon SVG -->
                                        </svg>
                                        Wishlist
                                    </button>
                                    <button type="submit" class="btnpesancld">Pesan Sekarang</button>
                                </div>
                            </div>
                        </form>
                        @else
                        <p>Data tidak ditemukan</p>
                        @endif                        
                    </div>
                </div>
            </div>
        </div>
        </section>