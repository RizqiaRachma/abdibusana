<?php

namespace App\Http\Controllers;

use DB;
use App\Models\jenis_bpjstk;
use Illuminate\Http\Request;

class Jenis_bpjstkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.BPJS_TK.jenis')->with([
            'jenis_bpjstk' => jenis_bpjstk::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createprogram()
    {
        return view('admin.BPJS_TK.create_program');
    }

    public function createtagihan()
    {
        return view('admin.BPJS_TK.create_tagihan');
    }

    public function storeprogram(Request $request)
    {
        $request->validate([
            'jenis'          => 'required|unique:jenis_bpjstk',
            'tarif'          => 'required'
        ]);
        $save = new jenis_bpjstk();
        $save->jenis         = $request->jenis;
        $save->tarif         = $request->tarif;
        $save->save();

        return redirect()->route('bpjstk.index')->with('success', 'Data Berhasil di Tambahkan');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function editprogram($id)
    {
        return view('admin.BPJS_TK.editprogram')->with([
            'jenis_bpjstk' => jenis_bpjstk::find($id),
        ]);
    }
    public function updateprogram(Request $request, $id)
    {


        $save = jenis_bpjstk::find($id);
        $save->jenis         = $request->jenis;
        $save->tarif         = $request->tarif;
        $save->save();

        return redirect()->route('bpjstk.index')->with('success', 'Data Berhasil di Ubah');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
    public function destroyprogram($id)
    {
        $data = jenis_bpjstk::find($id);
        $data->delete();

        return back()->with('success', 'Data Berhasil di Hapus!.');
    }
    public function destroy($id)
    {
        //
    }
}
