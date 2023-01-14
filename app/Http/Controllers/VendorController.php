<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('vendor')
            ->where('jenis_vendor', '=', 'Bahan')
            ->get();
        return view('admin.vendor.index')->with('data', $data);
    }

    public function lainnya()
    {
        $data = DB::table('vendor')
            ->where('jenis_vendor', '=', 'Lainnya')
            ->get();
        return view('admin.vendor.data_lainnya')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vendor.create');
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
            'nama_supplier'  => 'required|unique:vendor',
            'alamat'         => 'required',
            'telp'           => 'required'
        ]);
        $save = new Vendor();
        $save->nama_supplier   = $request->nama_supplier;
        $save->jenis_vendor    = $request->jenis_vendor;
        $save->npwp            = $request->npwp;
        $save->alamat          = $request->alamat;
        $save->telp            = $request->telp;
        $save->rekening        = $request->rekening;
        $save->keterangan      = $request->keterangan;
        $save->save();

        return redirect()->route('vendor.index')->with('success', 'Data Berhasil di Tambahkan');
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
    public function edit($id_supplier)
    {
        return view('admin.vendor.edit')->with([
            'vendor'     => Vendor::find($id_supplier),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_supplier)
    {


        $save = vendor::find($id_supplier);
        $save->nama_supplier   = $request->nama_supplier;
        $save->jenis_vendor    = $request->jenis_vendor;
        $save->npwp            = $request->npwp;
        $save->alamat          = $request->alamat;
        $save->telp            = $request->telp;
        $save->rekening        = $request->rekening;
        $save->keterangan      = $request->keterangan;
        $save->save();

        return redirect()->route('vendor.index')->with('success', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_supplier)
    {
        $data = Vendor::find($id_supplier);
        $data->delete();

        return back()->with('success', 'Data Berhasil di Hapus!.');
    }
}
