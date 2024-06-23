@extends('layout.template')
@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="pb-3">
        <form class="d-flex" action="{{ url('sekretariat-mahasiswa') }}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>
    <div class="pb-3">
        <a href='{{ url('sekretariat-mahasiswa/create') }}' class="btn btn-primary">+ Tambah Data Dosen</a>
        <a href="{{ url('sekretariat') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-1">NIM</th>
                <th class="col-md-3">Nama Mahasiswa</th>
                <th class="col-md-1">Email</th>
                <th class="col-md-1">Password</th>
                <th class="col-md-2">Gender</th>
                <th class="col-md-4">No Handphone</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->nama_mahasiswa }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->password }}</td>
                <td>{{ $item->gender }}</td>
                <td>{{ $item->no_handphone }}</td>
                <td class="d-flex">
                    <a href='{{ url('sekretariat-mahasiswa/'.$item->nim.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ url('sekretariat-mahasiswa/'.$item->nim) }}" class="d-inline" method="post" onsubmit="return confirm('Apakah anda ingin menghapus data?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm ms-1">Del</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
@endsection
