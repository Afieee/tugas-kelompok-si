<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $query = Mahasiswa::query();
        if (!empty($katakunci)) {
            $query->where(function($q) use ($katakunci) {
                $q->where('nim', 'like', "%{$katakunci}%")
                  ->orWhere('nama_mahasiswa', 'like', "%{$katakunci}%")
                  ->orWhere('email', 'like', "%{$katakunci}%")
                  ->orWhere('gender','like',"%{$katakunci}%")
                  ->orWhere('no_handphone','like',"%{$katakunci}%");
            });
        }

        $data = $query->orderBy('nim', 'asc')->paginate(5);

        return view('sekretariat.view-mahasiswa')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        return view('sekretariat.create-mahasiswa', compact('mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nim', $request->nim);
        $request->validate([
            'nim' => 'required|numeric|unique:mahasiswa,nim',
            'nama_mahasiswa' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'no_handphone' => 'required',
        ], [
            'nim.required' => 'Nim Kosong, Tolong Diisi',
            'nim.numeric' => 'Nim harus berupa angka, isi ulang data!',
            'nim.unique' => 'Nim yang kamu isikan sudah terdaftar!',
            'nama_mahasiswa.required' => 'Nama Dosen Kosong, Tolong Diisi',

            'email.required' => 'Email Kosong, Tolong Diisi',
            'password.required' => 'Password Kosong, Tolong Diisi',
            'gender.required' => 'Gender Kosong, Tolong Diisi',
            'no_handphone.required' => 'No Handphone Dosen Kosong, Tolong Diisi',

            'nim.exists' => 'Nim tidak terdaftar di database',
        ]);

        $data = [
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'email' => $request->email,
            'password' => $request->password,
            'gender' => $request->gender,
            'no_handphone' => $request->no_handphone,
        ];

        Mahasiswa::create($data);

        return redirect()->to('sekretariat-mahasiswa')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Mahasiswa::where('nim', $id)->first();
        return view('sekretariat.edit-mahasiswa')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'no_handphone' => 'required',
        ], [
            'nama_mahasiswa.required' => 'Nama Mahasiswa Kosong, Tolong Diisi',
            'email.required' => 'Email Kosong, Tolong Diisi',
            'password.required' => 'Password Kosong, Tolong Diisi',
            'gender.required' => 'Gender Kosong, Tolong Diisi',
            'no_handphone.required' => 'No Handphone Dosen Kosong, Tolong Diisi',

        ]);

        $data = [
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'email' => $request->email,
            'password' => $request->password,
            'gender' => $request->gender,
            'no_handphone' => $request->no_handphone,
        ];

        Mahasiswa::where('nim', $id)->update($data);

        // Update dosen data

        return redirect()->to('sekretariat-mahasiswa')->with('success', 'Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mahasiswa::where('nim', $id)->delete();
        return redirect()->to('sekretariat-mahasiswa')->with('success', 'Berhasil menghapus data');
    }

    public function viewMahasiswaSekretariat()
    {
        $data = Mahasiswa::orderBy('nim', 'asc')->paginate(5);
        return view('sekretariat.view-mahasiswa', compact('data'));
    }
}
