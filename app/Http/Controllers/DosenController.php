<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $query = Dosen::query();
        if (!empty($katakunci)) {
            $query->where(function($q) use ($katakunci) {
                $q->where('nip', 'like', "%{$katakunci}%")
                  ->orWhere('nama_dosen', 'like', "%{$katakunci}%")
                  ->orWhere('email', 'like', "%{$katakunci}%")
                  ->orWhere('gender','like',"%{$katakunci}%")
                  ->orWhere('no_handphone','like',"%{$katakunci}%");
            });
        }

        $data = $query->orderBy('nip', 'asc')->paginate(5);

        return view('sekretariat.view-dosen')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosen = Dosen::all();
        return view('sekretariat.create-dosen', compact('dosen'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nip', $request->nip);
        $request->validate([
            'nip' => 'required|numeric|unique:dosen,nip',
            'nama_dosen' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'no_handphone' => 'required',
        ], [
            'nip.required' => 'nip Kosong, Tolong Diisi',
            'nip.numeric' => 'nip harus berupa angka, isi ulang data!',
            'nip.unique' => 'nip yang kamu isikan sudah terdaftar!',
            'nama_dosen.required' => 'Nama Dosen Kosong, Tolong Diisi',

            'email.required' => 'Email Kosong, Tolong Diisi',
            'password.required' => 'Password Kosong, Tolong Diisi',
            'gender.required' => 'Gender Kosong, Tolong Diisi',
            'no_handphone.required' => 'No Handphone Dosen Kosong, Tolong Diisi',

            'nip.exists' => 'NIP Dosen tidak terdaftar di database',
        ]);

        $data = [
            'nip' => $request->nip,
            'nama_dosen' => $request->nama_dosen,
            'email' => $request->email,
            'password' => $request->password,
            'gender' => $request->gender,
            'no_handphone' => $request->no_handphone,
        ];

        Dosen::create($data);

        return redirect()->to('sekretariat-dosen')->with('success', 'Berhasil Menambahkan Data');
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

        $data = Dosen::where('nip', $id)->first();
        return view('sekretariat.edit-dosen')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_dosen' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'no_handphone' => 'required',
        ], [
            'nama_dosen.required' => 'Nama Dosen Kosong, Tolong Diisi',
            'email.required' => 'Email Kosong, Tolong Diisi',
            'password.required' => 'Password Kosong, Tolong Diisi',
            'gender.required' => 'Gender Kosong, Tolong Diisi',
            'no_handphone.required' => 'No Handphone Dosen Kosong, Tolong Diisi',

        ]);

        $data = [
            'nama_dosen' => $request->nama_dosen,
            'email' => $request->email,
            'password' => $request->password,
            'gender' => $request->gender,
            'no_handphone' => $request->no_handphone,
        ];

        Dosen::where('nip', $id)->update($data);

        // Update dosen data

        return redirect()->to('sekretariat-dosen')->with('success', 'Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Dosen::where('nip', $id)->delete();
        return redirect()->to('sekretariat-dosen')->with('success', 'Berhasil menghapus data');
    }

    public function viewDosenSekretariat()
    {
        $data = Dosen::orderBy('nip', 'asc')->paginate(5);
        return view('sekretariat.view-dosen', compact('data'));
    }
}
