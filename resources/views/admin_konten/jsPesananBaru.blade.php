@extends('admin_layout.main')
@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mb-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Kelola Jasa Service</li>
        <li class="breadcrumb-item active" aria-current="page">Pesanan Baru</li>
    </ol>
</nav>
<table id="example" class="table" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama customer</th>
            <th>jenis Kerusakan</th>
            <th>Deskripsi kerusakan</th>
            <th>Alamat</th>
            <th>Tanggal pemesanan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    @php
        $no = 1;
    @endphp
    @foreach ($jasaServis as $row)
    @if ($row->status === 'Menunggu Proses')

    <tbody>

        <tr>
            <td>{{$no++}}</td>
            <td>{{$row->namaJasa}}</td>
            <td>{{$row->kategoriJasa}}</td>
            <td>{{$row->deskripsiJasa}}</td>
            <td>{{$row->alamat}}</td>
            <td>{{ $row->tanggal}}</td>
            <td>{{$row->status}}</td>
            <td>
                <a href="{{ route('terimaPesanan', $row->idJasa) }}" type="button" class="btn btn-sm btn-success btn-primary w-75">Terima</a>
                <a  href="{{ route('tolakPesanan', $row->idJasa) }}" type="button" class="mt-2 btn btn-sm btn-danger btn-primary w-75">Tolak</a>
            </td>
        </tr>
    </tbody>
    @endif
    @endforeach
</table>

@endsection
