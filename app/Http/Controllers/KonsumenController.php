<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.konsumen.index')->with([
            'konsumen' => Konsumen::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.konsumen.create');
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
            'nama_konsumen'  => 'required|unique:konsumen',
            'alamat'         => 'required',
            'telp'           => 'required'
        ]);
        $save = new Konsumen();
        $save->nama_konsumen   = $request->nama_konsumen;
        $save->npwp            = $request->npwp;
        $save->alamat          = $request->alamat;
        $save->telp            = $request->telp;
        $save->keterangan      = $request->keterangan;
        $save->save();

        return redirect()->route('konsumen.index')->with('success', 'Data Berhasil di Tambahkan');
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
    public function edit($id_konsumen)
    {
        return view('admin.konsumen.edit')->with([
            'konsumen'     => Konsumen::find($id_konsumen),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_konsumen)
    {


        $save = konsumen::find($id_konsumen);
        $save->nama_konsumen   = $request->nama_konsumen;
        $save->npwp            = $request->npwp;
        $save->alamat          = $request->alamat;
        $save->telp            = $request->telp;
        $save->keterangan      = $request->keterangan;
        $save->save();

        return redirect()->route('konsumen.index')->with('success', 'Data Berhasil di Ubah');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_konsumen)
    {
        $data = Konsumen::find($id_konsumen);
        $data->delete();

        return back()->with('success', 'Data Berhasil di Hapus!.');
    }
}
