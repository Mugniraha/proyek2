@extends('admin_layout.main')
@section('content')

<div class="rounded-top p-3 text-white" style="background-color: #4C6687">Jasa Service > Selesai</div>
<div class="tbl shadow p-3 rounded">
    <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama customer</th>
                <th>Detail pesanan</th>
                <th>status</th>
                <th>Ulasan</th>
            </tr>
        </thead>
        <tbody>
            @php
                $nomor = 1;
            @endphp
            @foreach ($jasaServis as $row)
                <tr>
                    <td>{{$nomor++}}</td>
                    <td>{{$row->user->username}}</td>
                    <td>
                        <div class="card shadow p-2">
                            <table style="width: 100%; table-layout: fixed;">
                                <tr>
                                    <td style="width: 30%;">Nama Jasa</td>
                                    <td style="width: 5%;">:</td>
                                    <td style="width: 65%;">{{$row->namaJasa}}</td>
                                </tr>
                                <tr>
                                    <td>Deskripsi Kerusakan</td>
                                    <td>:</td>
                                    <td>{{ strlen($row->deskripsiJasa) > 2 ? substr($row->deskripsiJasa, 0, 100).'...' : $row->deskripsiJasa }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{ $row->alamat }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pemesanan</td>
                                    <td>:</td>
                                    <td>{{$row->tanggal}}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Selesai</td>
                                    <td>:</td>
                                    <td>{{$row->tanggal_selesai}}</td>
                                </tr>
                            </table>
                            <a href="#" type="button" class="btn btn-sm btn-primary w-100 shadow" data-bs-toggle="modal" data-bs-target="#edit{{$row->idJasa}}" style="background-color:#4C6687 "><i class="fa-solid fa-magnifying-glass"></i> Lihat Detail</a>
                        </div>
                    </td>
                    <td>
                        @if($row->status === 'Selesai')
                        <a href="#" class="btn btn-sm btn-success w-100" disabled>Selesai</a>
                        @elseif ($row->status === 'ditolak')
                        <a href="#" class="btn btn-sm btn-danger w-100" disabled>Ditolak</a>
                        @else
                        @endif
                    </td>
                    <td>
                        @if($row->status === 'Selesai')
                            <a href="#" class="btn btn-sm w-100 text-white" style="background-color:#4C6687;" data-bs-toggle="modal" data-bs-target="#ulasan">Balas Ulasan</a>
                        @elseif($row->status === 'ditolak')
                            <button class="btn btn-sm w-100 text-white" style="background-color:#4C6687;" disabled>Balas Ulasan</button>
                        @else
                        @endif
                    </td>
                </tr>
                <div class="modal fade" id="ulasan" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Balas Ulasan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Ulasan</label>
                                    <textarea class="form-control" id="formGroupExampleInput2" rows="10" name="ulasan"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal Detail Pesanan -->
@foreach ($jasaServis as $row)
    <div class="modal fade" id="edit{{$row->idJasa}}" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Detail Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Isi Detail Pesanan -->
                    <table style="width: 100%; table-layout: fixed;">
                        <tr>
                            <td style="width: 30%;">Nama Jasa</td>
                            <td style="width: 5%;">:</td>
                            <td style="width: 65%;">{{$row->namaJasa}}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi Kerusakan</td>
                            <td>:</td>
                            <td>{{ $row->deskripsiJasa }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $row->alamat }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Pemesanan</td>
                            <td>:</td>
                            <td>{{$row->tanggal}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Selesai</td>
                            <td>:</td>
                            <td>{{$row->tanggal_selesai}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection
