<?php

namespace App\Http\Controllers;

use App\Models\jenis_bpjskesehatan;
use Illuminate\Http\Request;

class Jenis_bpjskesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.BPJS_KS.jenis')->with([
            'jenis_bpjskesehatan' => jenis_bpjskesehatan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.BPJS_KS.create_jenis');
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
            'jenis'          => 'required|unique:jenis_bpjskesehatan',
            'tarif'          => 'required'

        ]);
        $save = new jenis_bpjskesehatan();
        $save->jenis         = $request->jenis;
        $save->tarif         = $request->tarif;
        $save->tanggungan    = $request->tanggungan;
        $save->save();

        return redirect()->route('bpjs-kesehatan.jenis')->with('success', 'Data Berhasil di Tambahkan');
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
        return view('admin.BPJS_KS.edit_jenis')->with([
            'jenis_bpjskesehatan' => jenis_bpjskesehatan::find($id),
        ]);
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
        $save = jenis_bpjskesehatan::find($id);
        $save->jenis         = $request->jenis;
        $save->tarif         = $request->tarif;
        $save->tanggungan    = $request->tanggungan;
        $save->save();

        return redirect()->route('bpjs-kesehatan.jenis')->with('success', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = jenis_bpjskesehatan::find($id);
        $data->delete();

        return back()->with('success', 'Data Berhasil di Hapus!.');
    }
}
