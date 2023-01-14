<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Karyawan;
use App\Models\Kasbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;





class KasbonController extends Controller
{
    public function index()
    {
    return view('admin.kasbon.index')->with([
        'kasbonz' => Kasbon::all(),
        'kasbon' => Kasbon::where('status', 'OK')->get(),
    ]);   
}
public function input()
{
    return view('admin.kasbon.input')->with([
        'karyawan' => Karyawan::where('kepegawaian', 'Pegawai')->get(),
    ]);
}

public function store(Request $request)
{
    $save = new kasbon();
    $save->nama    = $request->nama_karyawan;
    $save->nominal   = $request->pengajuan;
    $save->alasan   = $request->alasan;
    $save->keterangan   = '';
    $save->save();

    return redirect()->route('kasbon.index')->with('success', 'Data Berhasil di Tambahkan');
}

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
public function acc($id)
{
    return view('admin.kasbon.acc')->with([
        'Kasbon' => kasbon::find($id),
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
    $save = Karyawan::find($id);
    $save->keterangan        ='OK';
    $save->nominal_persetujuan = $save->nominal_persetujuan;
    $save->alasan = $save-alasan_persetujuan;
 
    $save->save();

    return redirect()->route('kasbon.index')->with('success', 'Data Berhasil di Ubah');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $data = Kasbon::find($id);
    $data->delete();

    return back()->with('success', 'Data Berhasil di Hapus!.');
}

}

