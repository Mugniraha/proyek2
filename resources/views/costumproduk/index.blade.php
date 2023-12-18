@extends('user-layout.nav-produk')
@section('konten')
        <section id="productscos">
        <div class="container">
            <div class="row">
                @php
                $idGaleri = $_GET['id_galeri'] ?? null; // Mengambil id_galeri dari URL
                $selectedData = null;

                // Mencari data yang sesuai dengan id_galeri
                if ($idGaleri !== null) {
                    foreach ($dataGaleri as $galeri) {
                        if ($galeri->id == $idGaleri) {
                            $selectedData = $galeri;
                            break;
                        }
                    }
                }
            @endphp

            @if ($selectedData !== null)
                <div class="cardcos">
                    <div class="card-left">
                        <img class="card-img-left" src="{{ asset('storage/img/'.$selectedData->gambar) }}" alt="Card image cap">
                    </div>
                    <div class="card-center">
                        <h6>Deskripsi Produk</h6>
                        <p>{{ $selectedData->deskripsi_galeri }}</p><hr>
                        <p>Dimensi Produk :</p>
                        <p>Lebar : {{ $selectedData->lebar }}</p>
                        <p>Panjang : {{ $selectedData->panjang }}</p>
                        <p>Tinggi: {{ $selectedData->tinggi }}</p>
                        <div class="price">
                            <h3>{{ $selectedData->nama_produk }}</h3>
                            <h3><i>RP.</i> {{ $selectedData->harga }}</h3>
                        </div>
                        <div class="btn">
                            <button class="btnord"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--Icon SVG--></svg>Order</button>
                        </div>
                    </div>
                    @else
                    <p>Data tidak ditemukan</p>
                    @endif
                    <div class="card-right">
                        <form action="{{ route('costumproduk.index', ['id_galeri' => '__id__']) }}" method="POST">
                            @csrf
                            <input type="hidden" name="id_galeri" value="{{ $galeri->id }}">
                            <div class="input1">
                                
                                <div class="mb-3">
                                    <label for="bahan" class="form-label">Bahan</label>
                                    <select class="form-select" id="bahan" name="pilihan_bahan">
                                        <option value="" selected disabled>Pilih Salah Satu Bahan</option>
                                        <option value="Baja">Baja</option>
                                        <option value="Holow">Holow</option>
                                        <option value="Alumunium">Alumunium</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="warna" class="form-label">Warna</label>
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
                                    <input type="number" class="form-control" id="panjang" name="panjang" placeholder="" value="">
                                </div>
                                <div class="mb-4">
                                    <label for="lebar" class="form-label">Lebar</label>
                                    <input type="number" class="form-control" id="lebar" name="lebar" placeholder="" value="">
                                </div>
                                <div class="mb-4">
                                    <label for="tinggi" class="form-label">Tinggi</label>
                                    <input type="number" class="form-control" id="tinggi" name="tinggi" placeholder="" value="">
                                </div>
                            </div>
                            <div class="input2">
                                <div class="mb-3">
                                    <label for="jumlah_pesanan" class="form-label">Jumlah Pesanan</label>
                                    <input type="number" class="form-control" id="jumlah_pesanan" name="jumlah_pesanan" placeholder="" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="pengiriman" class="form-label">Metode Pengiriman</label>
                                    <select class="form-select" id="pengiriman" name="pengiriman">
                                        <option value="" selected disabled>Pilih Metode Pengiriman</option>
                                        <option value="Ambil Ditempat">Ambil Ditempat</option>
                                        <option value="Jasa Antar">Jasa Antar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input3">
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Keterangan Tambahan</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="6" placeholder="Masukkan deskripsi"></textarea>
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
                    </div>
                </div>
            </div>
        </div>
        </section>