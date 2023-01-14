<?php

namespace App\Http\Controllers;

use App\Models\tatacara;
use Illuminate\Http\Request;

class TatacaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tatacara.index')->with([
            'tatacara' => Tatacara::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tatacara.create');
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
            'nama'      => 'required|unique:tatacara',
            'file'      => 'mimes:jpg,png,jpeg,pdf',
        ],);
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads');
        } else {
            $path = '';
        }
        $save = new Tatacara();
        $save->nama            = $request->nama;
        $save->link            = $request->link;
        $save->file            = $request->file;
        $save->keterangan      = $request->keterangan;
        $save->save();

        return redirect()->route('tatacara.index')->with('success', 'Data Berhasil di Tambahkan');
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
