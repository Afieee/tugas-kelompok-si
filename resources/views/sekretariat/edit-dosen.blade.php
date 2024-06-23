@extends('layout.template')
@section('konten')

<!-- START FORM -->
<form action='{{ url('sekretariat-dosen/'.$data->nip ) }}' method='post'>
@csrf
@method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="nip" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-10 d-flex align-items-center">
                <span>{{ $data->nip }}</span>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_dosen" class="col-sm-2 col-form-label">Nama Dosen</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_dosen' id="nama_dosen" value="{{ $data->nama_dosen }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='email' id="email" value="{{ $data->email }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='password' id="password" value="{{ $data->password }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="gender" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='gender' id="gender" value="{{ $data->gender }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="no_handphone" class="col-sm-2 col-form-label">No Handphone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='no_handphone' id="no_handphone" value="{{ $data->no_handphone }}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                <a href="{{ url('sekretariat') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection
