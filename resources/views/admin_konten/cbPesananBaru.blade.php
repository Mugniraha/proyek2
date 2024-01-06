@extends('admin_layout.main')
@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mb-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Kelola Custom Barang</li>
        <li class="breadcrumb-item active" aria-current="page">Pesanan Baru</li>
    </ol>
</nav>
<table id="example" class="table" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pemesan</th>
            <th>Nama Pesanan</th>
            <th>Detail Custom</th>
            <th>Metode Pengiriman</th>
            <th>Tanggal pemesanan</th>
            <th>Jumlah Barang</th>
            <th>Harga DP</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($custom as $row)
        @if ($row->statusPesanan === 'Menunggu Verifikasi')
        <tr>
            <td>{{$no++}}</td>
            <td></td>
            <td>{{$row->namaPesanan}}</td>
            <td>
                <div class="card shadow p-2">
                    <table style="width: 75%;">
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
                    </table>
                    <a href="#" type="button" class="btn btn-sm btn-primary w-100 shadow" data-bs-toggle="modal" data-bs-target="#edit{{$row->idPesanan}}" style="background-color:#4C6687 "><i class="fa-solid fa-magnifying-glass"></i> Lihat Detail</a>
                </div>
            </td>
            <td>{{$row->metodePengiriman}}</td>
            <td>{{$row->tanggalPemesanan}}</td>
            <td>{{$row->jumlahItem}}</td>
            <td>{{$row->totalHarga}}</td>
            <td>{{$row->totalHarga}}</td>
            <td>
                <a href="{{route('terimaPesanan',$row->idPesanan)}}" type="button" class="btn btn-sm btn-success btn-primary w-100" >Terima<a>
                <a  href="{{route('tolakPesanan',$row->idPesanan)}}" type="button" class="mt-2 btn btn-sm btn-danger btn-primary w-100">Tolak</a>
            </td>
        </tr>
        <div class="modal fade modal-dialog-scrollable text-start" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="formGroupExampleInput" name="gambar" placeholder="" value="">
                                <input type="hidden" value="">
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
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Detail Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Isi Detail Pesanan -->
                    <table style="width: 75%;">
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
