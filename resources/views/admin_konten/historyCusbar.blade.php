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
            <th>Detail Pesanan</th>
            <th>Tgl Pesanan Masuk</th>
            <th>Tgl Selesai</th>
            <th>Metode Pembayaran</th>
            <th>Metode Pengiriman</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>0012</td>
            <td>2023-12-12</td>
            <td>2023-12-12</td>
            <td>Transfer</td>
            <td>Ambil Ditempat</td>
            <td>
                <a href="#" type="button" class="btn btn-sm btn-success btn-primary w-75" data-bs-toggle="modal" data-bs-target="#edit">Selesai</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection
