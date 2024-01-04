@extends('admin_layout.main')
@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mb-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">History</li>
        <li class="breadcrumb-item active" aria-current="page">Custom Barang</li>
    </ol>
</nav>
<table id="example" class="table" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Detail pesanan</th>
            <th>status</th>
        </tr>
    </thead>
    <tbody>
        @php
            $nomor = 1;
        @endphp
        @foreach ($custom as $row)
        @if ($row->statusPesanan === 'Selesai' || $row->statusPesanan === 'Ditolak')
            <tr>
                <td>{{$nomor++}}</td>
                <td>
                    <div class="card shadow p-2">
                        <table style="table-layout:fixed;">
                            <tr>
                                <td style="width:25%">Nama Pemesan</td>
                                <td style="width: 5%">:</td>
                                <td style="width: 70%"></td>
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
                    @if($row->statusPesanan === 'Selesai')
                    <a href="#" class="btn btn-sm btn-success w-100" disabled>Selesai</a>
                    @elseif ($row->statusPesanan === 'Ditolak')
                    <a href="#" class="btn btn-sm btn-danger w-100" disabled>Ditolak</a>
                    @else
                    @endif
                </td>
            </tr>
        @endif
        @endforeach
    </tbody>
</table>

<!-- Modal Detail Pesanan -->
@foreach ($custom as $row)

@endforeach

@endsection
