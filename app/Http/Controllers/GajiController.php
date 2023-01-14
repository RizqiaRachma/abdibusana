<?php

namespace App\Http\Controllers;
use App\Models\Gaji;
use App\Models\Karyawan;
use App\Models\jenis_bpjskesehatan;
use App\Models\jenis_bpjstk;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index()
    {
    return view('admin.gaji.index')->with([
        'gaji' => Gaji::all(),
    ]);
}

public function inputgaji()
    {
        return view('admin.gaji.inputgaji')->with([
            'karyawan' => Karyawan::where('kepegawaian', 'Pegawai')->get(),
        ]);
    }

    public function store(Request $request)
{
    $save = new gajis();
    $save->tanggal = $request->tanggal;
    $save->nama_karyawan    = $request->nama_karyawan;
    $save->gajipokok   = $request->gajipok;
    $save->tunjangan   = $request->tunjangan;
    $save->uangmakan   = $request->uangmakan;
    $save->pot_bpjstk   = $request->potonganbpjstk;
    $save->pot_bpjsks   = $request->potonganbpjsks;
    $save->pot_pph   = $request->potonganpph21;
    $save->absensi   = $request->pot_absensi;
    $save->kasbon   = $request->sisakasbon;
    $save->sisa_upah   = $request->potkasbon;
    
    $save->save();

    return redirect()->route('gaji.index')->with('success', 'Data Berhasil di Tambahkan');
}
}
