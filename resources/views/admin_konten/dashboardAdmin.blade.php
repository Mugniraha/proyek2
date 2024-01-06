@extends('admin_layout.main')
@section('content')
<style>
    .card{
        box-shadow: 1px solid green;
        background-color: #4C6687;
        color: white;
    }
</style>
<div>
    <div class="row mt-5">
        <h5 class="fw-bold">Custom Barang</h5>
        <hr>
        @php
            $jumlahCustomBarang = $customBarang->where('statusPesanan','Menunggu Verifikasi')->count();
        @endphp
        <div class="col-md-4">
            <div class="card shadow rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Pesanan Baru</h5>
                    <p>{{$jumlahCustomBarang}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Siap Dikirim</h5>
                    <p>0</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Ulasan Baru</h5>
                    <p>0</p>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row mt-5">
        <h5 class="fw-bold">Jasa Service</h5>
        <hr>
        @php
        $jumlahPesananBaru = $jasaServis->where('status', 'Menunggu Proses')->count(); // Menghitung jumlah pesanan baru dari data yang diterima
        @endphp
        <div class="col-md-4">
            <div class="card shadow rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Pesanan Baru</h5>
                    <p>{{$jumlahPesananBaru}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Ulasan Baru</h5>
                    <p>0</p>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>


</div>
@endsection
