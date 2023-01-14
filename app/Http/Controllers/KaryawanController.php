<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\jenis_bpjskesehatan;
use App\Models\jenis_bpjstk;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.karyawan.index')->with([
            'karyawan' => Karyawan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.karyawan.create')->with([
            'jenis_bpjskesehatan' => jenis_bpjskesehatan::all(),
            'jenis_bpjstk' => jenis_bpjstk::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'               => 'required|unique:karyawan',
            'nama_karyawan'     => 'required',
        ]);
        $save = new karyawan();
        $save->nik              = $request->nik;
        $save->nama_karyawan    = $request->nama_karyawan;
        $save->no_hp            = $request->no_hp;
        $save->email            = $request->email;
        $save->no_rek           = $request->no_rek;
        $save->status           = $request->status;
        $save->kepegawaian      = $request->kepegawaian;
        $save->jml_kk           = $request->jml_kk;
        $save->gaji_pokok       = $request->gaji_pokok;
        $save->gaji_bpjs        = $request->gaji_bpjs;
        $save->tunjangan_tetap  = $request->tunjangan_tetap;
        $save->bpjs_ks          = $request->bpjs_ks;
        $save->bpjs_tk          = $request->bpjs_tk;
        $save->save();

        return redirect()->route('karyawan.index')->with('success', 'Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
