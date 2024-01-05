@extends('user-layout.nav-produk')
@section('konten')
    <section id="productscos">
        <div class="transaksi">
            @if ($pesanan !== null)
            <div class="payment-container-transaksi">
                <div class="payment-top-transaksi">
                    <div class="judul-transaksi">
                        <p>PEMBAYARAN DP</p>
                    </div>
                    <div class="kodepesanan-transaksi">
                        <p>{{ $pesanan->idPesanan }}</p>
                    </div>
                </div>
                <div class="payment-center-transaksi">
                    <div class="center-top-transaksi">
                        @if($pesanan->produk)
                        <img src="{{ asset('storage/img/' . $pesanan->produk->gambar) }}" alt="Gambar Produk">
                        @else
                            <p>Gambar tidak tersedia</p>
                        @endif
                        <div class="keterangan-transaksi">
                            <table class="product-keterangan-transaksi">
                                <tr>
                                    <td class="col-c-transaksi">{{ $pesanan->namaPesanan }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $pesanan->deskripsiPesanan }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="center-col-deskripsi-transaksi">
                        <table class="product-details-payment-transaksi">
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
                                <td>{{ \App\Models\Bahan::find($pesanan->bahan)->namaBahan }}</td>
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
                                <td>
                                        {{ \App\Models\Pengiriman::find($pesanan->metodePengiriman)->jenisPengiriman }}
                                </td>
                            </tr>
                            <tr>
                                <td>Total Harga</td>
                                <td class="narrow-column">:</td>
                                <td>{{ $pesanan->totalHarga }}</td>
                            </tr>
                        </table>
                        <div class="dp-price-payment-transaksi">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><i>Harga DP</i></td>
                                        <td class="gap-transaksi" rowspan="2">:</td>
                                        <td class="dp-price-transaksi" rowspan="2"><i>{{ $pesanan->totalHarga / 2 }}</i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="payment-bottom-transaksi">
                    <div class="btn-payment-dp-transaksi">
                        <a href="#"><button class="btndp">{{ $pesanan->statusPesanan }}</button></a>
                    </div>
                </div>
            </div>

            <div class="transaksi-card">
                <div class="transaksi-top">
                    <div class="transaksi-head">
                        <p>Pilih Pembayaran</p>
                    </div>
                    <div class="transaksi-sign">
                        <p>Mohon pilih metode pembayaran cashless dan lakukan transaksi. Silahkan kirim bukti pembayaran untuk verifikasi oleh admin.</p>
                    </div>
                </div>
                <div class="transaksi-middle">
                    <div class="transaksi-pilihan">
                        <div id="qrCodeContainer"></div>
                        <ul class="list-group-transaksi">
                            <li class="list-group-item-gopay">
                                <img src="{{ asset('images/LogoGopay.png')}}" alt="Logo" class="img-pembayaran">Gopay
                            </li>
                            <li class="list-group-item-ovo">
                                <img src="{{ asset('images/LogoOvo.png')}}" alt="Logo"  class="img-pembayaran">OVO
                            </li>
                            <li class="list-group-item-dana">
                                <img src="{{ asset('images/LogoDana.png')}}" alt="Logo" class="img-pembayaran">Dana
                            </li>
                        </ul>

                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                        const gopayItem = document.querySelector('.list-group-item-gopay');
                        const ovoItem = document.querySelector('.list-group-item-ovo');
                        const danaItem = document.querySelector('.list-group-item-dana');
                        const qrCodeContainer = document.getElementById('qrCodeContainer');


                        // Fungsi untuk menampilkan gambar QR Code
                        function showQRCode(imageUrl) {
                            qrCodeContainer.innerHTML = `<img src="{{ asset('${imageUrl}') }}" alt="QR Code" class="qr-code">`;
                        }

                        // Event listener ketika item Gopay dipilih
                        gopayItem.addEventListener('click', function() {
                            const gopayQRCode = 'images/kodeqrgopay.jpeg'; // Ganti dengan URL gambar QR Code Gopay
                            showQRCode(gopayQRCode);
                        });

                        // Event listener ketika item OVO dipilih
                        ovoItem.addEventListener('click', function() {
                            const ovoQRCode = 'images/kodeqrovo.jpeg'; // Ganti dengan URL gambar QR Code OVO
                            showQRCode(ovoQRCode);
                        });

                        // Event listener ketika item Dana dipilih
                        danaItem.addEventListener('click', function() {
                            const danaQRCode = 'images/kodeqrdana.jpeg'; // Ganti dengan URL gambar QR Code Dana
                            showQRCode(danaQRCode);
                        });
                    });

                    </script>
                </div>
                <div class="transaksi-bottom">
                    <div class="button-transaksi">
                        <form action="{{ route('pembayaran.store')}}" method="POST">
                            @csrf
                            <div class="metode">
                                <select class="form-select" id="metodePembayaran" name="metodePembayaran">
                                    <option value="" selected disabled>Pilih Metode Pembayaran</option>
                                    <option value="GOPAY">GOPAY</option>
                                    <option value="OVO">OVO</option>
                                    <option value="DANA">DANA</option>
                                </select>
                            </div>
                            <div class="button-upload">
                                <div class="inputan-upload">
                                    <input type="hidden" class="form-control" name="idPesanan" value="{{ $pesanan->idPesanan }}">
                                    <input type="file" name="buktiPembayaran" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />
                                    <label for="file"><span><i class="fa-solid fa-cloud-arrow-up" style="color: #2474ff;"></i> Upload Bukti Pembayaran...</span></label>
                                </div>
                                <div class="button-submit">
                                    <button class="btn-trn" type="submit">Kirim</button>
                                </div>
                            </div>
                            <script>
                                var inputs = document.querySelectorAll('.inputfile');
                                Array.prototype.forEach.call(inputs, function (input) {
                                    var label = input.nextElementSibling,
                                        labelVal = label.innerHTML;

                                    input.addEventListener('change', function (e) {
                                        var fileName = '';
                                        if (this.files && this.files.length > 1) {
                                            fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
                                        } else {
                                            fileName = e.target.value.split('\\').pop();  // Mengganti '\' menjadi '\\'
                                        }

                                        if (fileName) {
                                            label.querySelector('span').innerHTML = fileName;  // Menggunakan strong sebagai pengganti span
                                        } else {
                                            label.innerHTML = labelVal;
                                        }
                                    });
                                });
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @else
        <p>Data tidak ditemukan</p>
        @endif
    </section>
