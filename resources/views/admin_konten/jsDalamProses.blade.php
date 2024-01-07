@extends('admin_layout.main')
@section('content')

<div class="rounded-top p-3 text-white" style="background-color: #4C6687">Jasa Service > Dalam Proses</div>
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
                <td>{{$row->user->username}}</td>
                <td>{{$row->kategoriJasa}}</td>
                <td>{{$row->deskripsiJasa}}</td>
                <td>{{$row->alamat}}</td>
                <td>{{ ($row->tanggal) }}</td>
                <td>
                    @if($row->status === 'diproses')
                        <a href="{{route('selesaiService', $row->idJasa)}}" class="btn btn-sm btn-primary w-100">Selesaikan</a>
                    @elseif($row->status === 'ditolak')
                        <button class="btn btn-sm btn-danger w-100" disabled>Ditolak</button>
                    @else
                        <button class="btn btn-sm btn-success w-75" disabled>Proses lainnya</button>
                    @endif
                </td>

            </tr>
        </tbody>
        @endif
        @endforeach
    </table>
</div>
@endsection
