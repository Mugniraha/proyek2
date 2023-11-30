@extends('admin_layout.main')
@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mb-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">History</li>
        <li class="breadcrumb-item active" aria-current="page">Custom Barang</li>
    </ol>
</nav>
<div>
    <div class="row">
        <h5>Pengunjung</h5>
        <hr>
        <div class="col-md-4">
            <div class="card shadow rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Pengunjung hari Ini</h5>
                    <p>76</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Pengunjung Bulan Ini</h5>
                    <p>76</p>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row mt-5">
        <h5>Custom Barang</h5>
        <hr>
        <div class="col-md-4">
            <div class="card shadow rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Pesanan Baru</h5>
                    <p>76</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Siap Dikirim</h5>
                    <p>76</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Ulasan Baru</h5>
                    <p>76</p>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row mt-5">
        <h5>Jasa Service</h5>
        <hr>
        <div class="col-md-4">
            <div class="card shadow rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Pesanan Baru</h5>
                    <p>76</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Ulasan Baru</h5>
                    <p>76</p>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>


</div>
@endsection
