@extends('admin_layout.main')
@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mb-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Kelola Jasa Service</li>
        <li class="breadcrumb-item active" aria-current="page">Dalam Proses</li>
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
        </tr>
    </thead>
    @php
        $nomor = 1;
    @endphp
    @foreach ($jasaServis as $row)
    @if ($row->status === 'diproses')

    <tbody>

        <tr>
            <td>{{$nomor++}}</td>
            <td>{{$row->namaJasa}}</td>
            <td>{{$row->kategoriJasa}}</td>
            <td>{{$row->deskripsiJasa}}</td>
            <td>{{$row->alamat}}</td>
            <td>{{ ($row->tanggal) }}</td>
            <td>
                @if($row->status === 'diproses')
                    <a href="{{route('selesai', $row->idJasa)}}" class="btn btn-sm btn-primary w-75">Selesaikan</a>
                @elseif($row->status === 'ditolak')
                    <button class="btn btn-sm btn-danger w-75" disabled>Ditolak</button>
                @else
                    <button class="btn btn-sm btn-success w-75" disabled>Proses lainnya</button>
                @endif
            </td>

        </tr>
    </tbody>
    @endif
    @endforeach
</table>

@endsection
