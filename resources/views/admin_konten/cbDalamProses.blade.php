@extends('admin_layout.main')
@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mb-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Kelola Custom Barang</li>
        <li class="breadcrumb-item active" aria-current="page">Dalam Proses</li>
    </ol>
</nav>
<table id="example" class="table" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th class="w-75">Detail Custom</th>
            <th>Verifikasi Pembayaran</th>
            <th>Input Progres</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($custom as $row)
        @if ($row->statusPesanan === 'Sudah Diverifikasi'
        || $row->statusPesanan === 'Sedang Diproses')
        <tr>
            <td>{{$no++}}</td>
            <td>
                <div class="card shadow p-2">
                    <table style="table-layout:fixed;">
                        <tr>
                            <td style="width:25%">Nama Pemesan</td>
                            <td style="width: 5%">:</td>
                            <td style="width: 70%">{{$row->user->username}}</td>
                        </tr>
                        <tr>
                            <td>Nama Pesanan</td>
                            <td>:</td>
                            <td>{{$row->namaPesanan}}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi Pesanan</td>
                            <td>:</td>
                            <td>{{ strlen($row->deskripsiPesanan) > 2 ? substr($row->deskripsiPesanan, 0, 100).'...' : $row->deskripsiPesanan }}</td>
                        </tr>
                        <tr>
                            <td>Bahan</td>
                            <td>:</td>
                            <td>{{ $row->bahan }}</td>
                        </tr>
                        <tr>
                            <td>Panjang</td>
                            <td>:</td>
                            <td>{{$row->panjang}} Cm</td>
                        </tr>
                        <tr>
                            <td>Lebar</td>
                            <td>:</td>
                            <td>{{$row->lebar}} Cm</td>
                        </tr>
                        <tr>
                            <td>Tinggi</td>
                            <td>:</td>
                            <td>{{$row->tinggi}} Cm</td>
                        </tr>
                        <tr>
                            <td>Warna</td>
                            <td>:</td>
                            <td>{{$row->warna}}</td>
                        </tr>
                        <tr>
                            <td>Metode Pengiriman</td>
                            <td>:</td>
                            <td>{{$row->metodePengiriman}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Pemesanan</td>
                            <td>:</td>
                            <td>{{$row->tanggalPemesanan}}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Item</td>
                            <td>:</td>
                            <td>{{$row->jumlahItem}}</td>
                        </tr>
                        <tr>
                            <td>Harga DP</td>
                            <td>:</td>
                            <td>{{$row->totalHarga}}</td>
                        </tr>
                        <tr>
                            <td>Total Harga</td>
                            <td>:</td>
                            <td>{{$row->totalHarga}}</td>
                        </tr>
                    </table>
                    <a href="#" type="button" class="btn btn-sm btn-primary w-100 shadow" data-bs-toggle="modal" data-bs-target="#edit{{$row->idPesanan}}" style="background-color:#4C6687 "><i class="fa-solid fa-magnifying-glass"></i> Lihat Detail</a>
                </div>
            </td>
            <td>
                @if($row->statusPesanan == 'Sudah Diverifikasi')
                    @if($row->pembayaran)
                    <img class="mb-2" src="{{ asset('storage/img/'. $row->pembayaran->buktiPembayaran) }}" width="100%" alt="{{$row->pembayaran->buktiPembayaran}}">
                    <a href="{{ route('verifikasiPembayaran', $row->idPesanan) }}" type="button" class="btn btn-sm btn-success btn-primary w-100">Verifikasi</a>
                    <a href="#" type="button" class="mt-2 btn btn-sm btn-danger btn-primary w-100" data-bs-toggle="modal" data-bs-target="#hapus">Tolak</a>
                    @else
                        <!-- Handle ketika pembayaran bernilai null -->
                        <span>Tidak Ada Bukti Pembayaran</span>
                    @endif

                    @elseif ($row->statusPesanan === 'Sedang Diproses')
                    <a href="#" type="button" class="mt-2 btn btn-sm btn w-100" style="background-color:#4C6687;color:white;">Terverifikasi</a>
                @endif
            </td>
            <td>
                @if($row->statusPesanan == 'Sedang Diproses')
                <a href="#" type="button" class="btn btn-sm btn-success btn-primary w-100" data-bs-toggle="modal" data-bs-target="#progres{{$row->idPesanan}}">Input Progres</a>
                @endif
            </td>
            <td>
                @if ($row->statusPesanan === 'Sedang Diproses')
                <a href="{{ route('selesai', $row->idPesanan) }}" type="button" class="btn btn-sm btn-success btn-primary w-100">Selesaikan</a>
                @endif

            </td>
        </tr>
        <div class="modal fade modal-dialog-scrollable text-start" id="progres{{$row->idPesanan}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Input Progres</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('inputProgres', $row->idPesanan) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="">Id Pesanan</label>
                                <input type="readonly" class="form-control readonly" name="idPesanan" value="{{$row->idPesanan}}">
                                {{-- <input type="hidden" name="idAdmin" value="idAdmin"> --}}
                            </div>
                            <div class="mb-3">
                                <label for="">Input Progres:</label>
                                <select name="progres" class="form-select" aria-label="Default select example" id="progresSelect">
                                    <option selected disabled>Input Progres</option>
                                    <option value="25">25%</option>
                                    <option value="50">50%</option>
                                    <option value="75">75%</option>
                                    <option value="100">100%</option>
                                </select>
                            </div>

                            <div class="mb-3" id="gambarInput" style="display: none;">
                                <label for="formGroupExampleInput" class="form-label">tambahkan Gambar</label>
                                <input type="file" class="form-control" id="formGroupExampleInput" name="gambar" placeholder="" value="">
                                <input type="hidden" value="">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>

                            <script>
                                var progresSelect = document.getElementById('progresSelect');
                                var keteranganSelect = document.getElementById('keteranganSelect');
                                var gambarInput = document.getElementById('gambarInput');

                                progresSelect.addEventListener('change', function() {
                                    if (this.value == '50' || this.value == '100') {
                                        gambarInput.style.display = 'block';
                                    } else {
                                        gambarInput.style.display = 'none';
                                    }
                                });

                                keteranganSelect.addEventListener('change', function() {
                                    if (this.value == '2' || this.value == '4') {
                                        gambarInput.style.display = 'block';
                                    } else {
                                        gambarInput.style.display = 'none';
                                    }
                                });
                            </script>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        {{-- Modal untuk hapus data --}}
        <div class="modal fade modal-dialog-scrollable" id="hapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Hapus Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                <h3>YAKIN INGIN MENGHAPUS DATA?!</h3>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @if(session('success'))
                <div class="alert alert-success mb-2">
                    {{ session('success') }}
                </div>
        @endif
    </tbody>
</table>

@foreach ($custom as $row)
    <div class="modal fade" id="edit{{$row->idPesanan}}" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Detail Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Isi Detail Pesanan -->
                    <table style="table-layout:fixed;">
                        <tr>
                            <td style="width:25%">Nama Pemesan</td>
                            <td style="width: 5%">:</td>
                            <td style="width: 70%">{{$row->user->username}}</td>
                        </tr>
                        <tr>
                            <td>Nama Pesanan</td>
                            <td>:</td>
                            <td>{{$row->namaPesanan}}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi Pesanan</td>
                            <td>:</td>
                            <td>{{ $row->deskripsiPesanan }}</td>
                        </tr>
                        <tr>
                            <td>Bahan</td>
                            <td>:</td>
                            <td>{{ $row->bahan }}</td>
                        </tr>
                        <tr>
                            <td>Panjang</td>
                            <td>:</td>
                            <td>{{$row->panjang}} Cm</td>
                        </tr>
                        <tr>
                            <td>Lebar</td>
                            <td>:</td>
                            <td>{{$row->lebar}} Cm</td>
                        </tr>
                        <tr>
                            <td>Tinggi</td>
                            <td>:</td>
                            <td>{{$row->tinggi}} Cm</td>
                        </tr>
                        <tr>
                            <td>Warna</td>
                            <td>:</td>
                            <td>{{$row->warna}}</td>
                        </tr>
                        <tr>
                            <td>Metode Pengiriman</td>
                            <td>:</td>
                            <td>{{$row->metodePengiriman}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Pemesanan</td>
                            <td>:</td>
                            <td>{{$row->tanggalPemesanan}}</td>
                        </tr><tr>
                            <td>Jumlah Item</td>
                            <td>:</td>
                            <td>{{$row->jumlahItem}}</td>
                        </tr><tr>
                            <td>Harga DP</td>
                            <td>:</td>
                            <td>{{$row->totalHarga}}</td>
                        </tr><tr>
                            <td>Total Harga</td>
                            <td>:</td>
                            <td>{{$row->totalHarga}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endforeach

<div class="modal fade modal-dialog-scrollable text-start" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="formGroupExampleInput" name="gambar" placeholder="" value="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Deskripsi</label>
                        <textarea type="number" class="form-control" id="formGroupExampleInput2" name="deskripsi_galeri" placeholder="" value=""></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="formGroupExampleInput2" name="harga" placeholder="" value="">
                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
