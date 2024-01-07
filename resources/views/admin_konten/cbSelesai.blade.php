@extends('admin_layout.main')
@section('content')


<div class="rounded-top p-3 text-white" style="background-color: #4C6687">Custom Barang > Selesai</div>
<div class="tbl shadow p-3 rounded">
    <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th class="w-75">Detail Custom</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($custom as $row)
            @if ($row->statusPesanan === 'Selesai' || $row->statusPesanan === 'Ditolak')
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
                        <a href="#" type="button" class="btn btn-sm btn-primary w-100 shadow" data-bs-toggle="modal" data-bs-target="#show{{$row->idPesanan}}" style="background-color:#4C6687 "><i class="fa-solid fa-magnifying-glass"></i> Lihat Detail</a>
                    </div>
                </td>
                <td>
                    @if($row->statusPesanan === 'Selesai')
                        <a href="#" class="btn btn-sm btn-success w-100" disabled>Selesai</a>
                        @elseif ($row->statusPesanan === 'Ditolak')
                        <a href="#" class="btn btn-sm btn-danger w-100" disabled>Ditolak</a>
                        @else
                    @endif
                </td>
                <td>
                    @if ($row->statusPesanan === 'Selesai')
                        <a href="#" type="button" class="btn btn-sm btn-warning btn-primary w-75" data-bs-toggle="modal" data-bs-target="#edit">Balas ulasan</a>
                        @else
                        <a href="#" type="button" class="btn btn-sm btn-warning btn-primary w-75 disabled" disabled readonly>Balas ulasan</a>
                    @endif


                </td>
            </tr>

            <div class="modal fade modal-dialog-scrollable text-start" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Balas Ulasan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Ulasan</label>
                                    <textarea type="text" rows="10" class="form-control" id="formGroupExampleInput2" name="deskripsi_galeri" placeholder="" value=""></textarea>
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
            @endif
            @endforeach
            @if(session('success'))
                    <div class="alert alert-success mb-2">
                        {{ session('success') }}
                    </div>
            @endif

        </tbody>
    </table>
</div>

@foreach ($custom as $row)
    <div class="modal fade" id="show{{$row->idPesanan}}" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
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
@endsection
