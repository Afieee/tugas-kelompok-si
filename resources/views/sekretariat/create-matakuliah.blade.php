@extends('layout.template')
@section('konten')

<!-- START FORM -->
<form action='{{ url('sekretariat-matakuliah') }}' method='post'>
@csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id_matakuliah" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='id_matakuliah' value="{{ Session::get('id_matakuliah') }}" id="id_matakuliah">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_matakuliah" class="col-sm-2 col-form-label">Nama Matakuliah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_matakuliah' id="nama_matakuliah">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="sks" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='sks' id="sks">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="semester" class="col-sm-2 col-form-label">Semester</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='semester' id="semester">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="perkuliahan" class="col-sm-2 col-form-label">Perkuliahan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='perkuliahan' id="perkuliahan">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nip" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-10">
                <select class="form-control" name='nip' id="nip">
                    <option value="" > <i>Select - (NIP - Dosen)</option>
                    @foreach ($dosen as $dsn)
                        <option value="{{ $dsn->nip }}">{{ $dsn->nip }} - {{ $dsn->nama_dosen }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nip" class="col-sm-2 col-form-label">Id Jurusan</label>
            <div class="col-sm-10">
                <select class="form-control" name='id_jurusan' id="id_jurusan">
                    <option value="" > <i>Select - (Id Jurusan - Nama Jurusan)</option>
                    @foreach ($jurusan as $jsn)
                        <option value="{{ $jsn->id_jurusan }}">{{ $jsn->id_jurusan }} - {{ $jsn->nama_jurusan }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                <a href="/sekretariat/view-matakuliah-sekretariat" class="btn btn-secondary"> kembali</a>
            </div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection
