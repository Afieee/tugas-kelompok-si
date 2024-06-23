@extends('layout.template')
@section('konten')

<!-- START FORM -->
<form action='{{ url('sekretariat-dosen') }}' method='post'>
@csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='nip' value="{{ Session::get('nip') }}" id="nip">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label">Nama Dosen</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_dosen' id="nama_dosen">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='email' id="email">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name='password' id="password">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='gender' id="gender">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label">No Handphone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='no_handphone' id="no_handphone">
            </div>
        </div>


        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                <a href="/sekretariat/view-dosen-sekretariat" class="btn btn-secondary"> kembali</a>
            </div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection
