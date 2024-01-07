@extends('admin_layout.main')
@section('content')

<div class="rounded-top p-3 text-white" style="background-color: #4C6687">Jasa Service > Pesanan Baru</div>
<div class="tbl shadow p-3 rounded">
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
                <td>{{$row->user->username}}</td>
                <td>{{$row->kategoriJasa}}</td>
                <td>{{$row->deskripsiJasa}}</td>
                <td>{{$row->alamat}}</td>
                <td>{{ $row->tanggal}}</td>
                <td>{{$row->status}}</td>
                <td>
                    <a href="{{ route('terimaPesananService', $row->idJasa) }}" type="button" class="btn btn-sm btn-success btn-primary w-75">Terima</a>
                    <a  href="{{ route('tolakPesananService', $row->idJasa) }}" type="button" class="mt-2 btn btn-sm btn-danger btn-primary w-75">Tolak</a>
                </td>
            </tr>
        </tbody>
        @endif
        @endforeach
    </table>
</div>

@endsection
