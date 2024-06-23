@extends('layout.template')
@section('konten')


        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                    <div class="pb-3">
                    <form class="d-flex" action="{{ url('sekretariat-matakuliah') }}" method="get">
                        <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                        <button class="btn btn-secondary" type="submit">Cari</button>
                    </form>
                    </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                    <a href='{{ url('sekretariat-matakuliah/create') }}' class="btn btn-primary">+ Tambah Data Matakuliah</a>
                    <a href="{{ url('sekretariat') }}" class="btn btn-secondary"> kembali</a>

                </div>
                <table class="table table-striped" border="1">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-1">ID</th>
                            <th class="col-md-3">Nama Matakuliah</th>
                            <th class="col-md-1">SKS</th>
                            <th class="col-md-1">Semester</th>
                            <th class="col-md-2">Perkuliahan</th>
                            <th class="col-md-4">Dosen</th>
                            <th class="col-md-2">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->id_matakuliah }}</td>
                            <td>{{ $item->nama_matakuliah }}</td>
                            <td>{{ $item->sks }}</td>
                            <td>{{ $item->semester }}</td>
                            <td>{{ $item->perkuliahan }}</td>
                            <td>{{ $item->dosen->nama_dosen }}</td>
                            <td class="d-flex">
                                <a href='{{ url('sekretariat-matakuliah/'.$item->id_matakuliah. '/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ url('sekretariat-matakuliah/'.$item->id_matakuliah) }}" class="d-inline" method="post" onsubmit="return confirm('Apakah anda ingin menghapus data?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm ms-1">Del</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--page halaman slider -->
                {{ $data->links() }}
        </div>
@endsection
