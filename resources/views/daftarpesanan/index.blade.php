@extends('user-layout.nav-user')
@section('konten')
        <section id="productspes">
            <div class="btn-top">
                <a href="{{ route('daftarpesanan.riwayat') }}"><button class="btnriwayat">Riwayat Pesanan</button></a>
                <a href="{{ route('daftarpesanan.riwayatService') }}"><button class="btnriwayat">Riwayat Service</button></a>
                <hr>
            </div>
        @foreach($dataPesanan as $pesanan)
        @if($pesanan->statusPesanan !== 'Selesai')
        <div class="container">
            <div class="row">
                <div class="cardpes">
                    <div class="card-top">
                        <div class="left-text">
                            <h6><i>JOYO ROYO BENGKEL WELDING</i></h6>
                        </div>
                        <div class="right-text">
                            <p class="statusPesanan">{{ $pesanan->statusPesanan }}</p>
                            <div class="vertical-line"></div>
                            <p class="idpesanan">ID:{{ $pesanan->idPesanan }}</p>
                        </div>
                    </div>
                    <div class="card-center">
                        <div class="left-col">
                            @if($pesanan->produk)
                            <img src="{{ asset('storage/img/' . $pesanan->produk->gambar) }}" alt="Gambar Produk">
                            @else
                                <p>Gambar tidak tersedia</p>
                            @endif
                        </div>
                        <div class="center-col">
                            <table class="product-details">
                                <tr>
                                    <td  class="colhead" colspan="3">{{ $pesanan->namaPesanan }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="col-g">Panjang</td>
                                    <td class="narrow-column">:</td>
                                    <td class="col-g">{{ $pesanan->panjang }}</td>

                                </tr>
                                <tr>
                                    <td>Warna</td>
                                    <td class="narrow-column">:</td>
                                    <td>{{ $pesanan->warna }}</td>
                                    <td class="col-g">Lebar</td>
                                    <td class="narrow-column">:</td>
                                    <td>{{ $pesanan->lebar }}</td>
                                </tr>
                                <tr>
                                    <td>Bahan Rangka</td>
                                    <td class="narrow-column">:</td>
                                    <td>{{ \App\Models\Bahan::find($pesanan->bahan)->namaBahan }}</td>
                                    <td>Tinggi</td>
                                    <td class="narrow-column">:</td>
                                    <td >{{ $pesanan->tinggi }}</td>
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
                                            <td class="status-payment" rowspan="2"><i>{{ $pesanan->statusPembayaran }}</i></td>
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
                                            <td><i>Total Harga</i></td>
                                            <td>:</td>
                                            <td class="pricefull">Rp {{ $pesanan->totalHarga}}</td>
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
                                @foreach($pesanan->pemantauans as $pemantauan)
                                    <div class="card-proses">
                                        <div class="card-proses-top">
                                            @if($pemantauan->progres===25)
                                            <p>Start</p>
                                            @elseif($pemantauan->progres===50)
                                            <p>Process</p>
                                            @elseif($pemantauan->progres===75)
                                            <p>Finishing</p>
                                            @elseif($pemantauan->progres===100)
                                            <p>Finish</p>
                                            @else
                                            
                                            @endif
                                        </div>
                                        <div class="card-proses-middle">
                                            <div class="desk-star">
                                                @if($pemantauan->progres == 50 || $pemantauan->progres == 100)
                                                <img src="{{ asset('storage/img/'.$pemantauan->gambar) }}" alt="Gambar Progres">
                                                @else
                                                <img src="{{ asset('images/ikonproses.png')}}" alt="Logo">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="card-proses-bottom">
                                            <table class="progres-barang">
                                                <tr>
                                                    <td>Keterangan</td>
                                                    <td class="td-titik">:</td>
                                                    <td class="keterangan-proses">{{ $pemantauan->keterangan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Update</td>
                                                    <td class="td-titik">:</td>
                                                    <td>{{ $pemantauan->tanggalUpdate }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                @endforeach
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
                            @if($pesanan->statusPesanan === 'Sudah Diverifikasi')
                            <a href="{{ route('pembayaran.transaksi', ['idPesanan' => $pesanan->idPesanan]) }}">
                                <button class="btncall">Pembayaran DP</button>
                            </a>
                            @elseif($pesanan->statusPesanan === 'Menunggu Verifikasi')
                            <!-- Tambahkan kelas "disabled" dan atribut "disabled" untuk menonaktifkan tombol -->
                            <button class="btncall-disabled" disabled>Pembayaran DP</button>
                            @elseif($pesanan->statusPesanan === 'Sedang Diproses')
                            <button class="btncall-finish" disabled><i class="fa-solid fa-circle-check" style="color: #66ff70;"></i> Sudah Pembayaran DP</button>
                            @else
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @else

        @endif
        @endforeach
        </section>
