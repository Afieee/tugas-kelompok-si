@extends('layout.template')
@section('konten')

<!-- START FORM -->
<form action='{{ url("sekretariat-matakuliah/$data->id_matakuliah") }}' method='post'>
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id_matakuliah" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                {{ $data->id_matakuliah }}
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_matakuliah" class="col-sm-2 col-form-label">Nama Matakuliah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_matakuliah' id="nama_matakuliah" value="{{ $data->nama_matakuliah }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="sks" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='sks' id="sks" value="{{ $data->sks }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="semester" class="col-sm-2 col-form-label">Semester</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='semester' id="semester" value="{{ $data->semester }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="perkuliahan" class="col-sm-2 col-form-label">Perkuliahan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='perkuliahan' id="perkuliahan" value="{{ $data->perkuliahan }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nip" class="col-sm-2 col-form-label">Dosen</label>
            <div class="col-sm-10">
                <select class="form-control" name='nip' id="nip">
                    @foreach ($dosen as $item)
                        <option value="{{ $item->nip }}" {{ $item->nip == $data->dosen->nip ? 'selected' : '' }}>
                            {{ $item->nip }} - {{ $item->nama_dosen }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="id_jurusan" class="col-sm-2 col-form-label">Id Jurusan</label>
            <div class="col-sm-10">
                <select class="form-control" name='id_jurusan' id="id_jurusan">
                    @foreach ($jurusan as $jsn)
                        <option value="{{ $jsn->id_jurusan }}" {{ $jsn->id_jurusan == $data->id_jurusan ? 'selected' : '' }}>
                            {{ $jsn->id_jurusan }} - {{ $jsn->nama_jurusan }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                <a href="{{ url('sekretariat') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
    <!-- AKHIR FORM -->
</form>
@endsection
