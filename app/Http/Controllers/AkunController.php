<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Akun;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('akun')
            ->where('jenis_akun', '=', 'Email')
            ->get();
        return view('admin.akun.index')->with('data', $data);
    }

    public function izin()
    {
        $data = DB::table('akun')
            ->where('jenis_akun', '=', 'Perizinan')
            ->get();
        return view('admin.akun.perizinan')->with('data', $data);
    }

    public function sosmed()
    {
        $data = DB::table('akun')
            ->where('jenis_akun', '=', 'Sosmed')
            ->get();
        return view('admin.akun.sosmed')->with('data', $data);
    }
    public function lainnya()
    {
        $data = DB::table('akun')
            ->where('jenis_akun', '=', 'Lainnya')
            ->get();
        return view('admin.akun.lainnya')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.akun.create');
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
            'nama_akun'      => 'required|unique:akun',
            'email'          => 'required',
            'password'       => 'required'
        ]);
        $save = new Akun();
        $save->nama_akun       = $request->nama_akun;
        $save->jenis_akun      = $request->jenis_akun;
        $save->link            = $request->link;
        $save->username        = $request->username;
        $save->email           = $request->email;
        $save->password        = $request->password;
        $save->ket             = $request->ket;
        $save->save();

        return redirect()->route('akun.index')->with('success', 'Data Berhasil di Tambahkan');
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
    public function edit($id_akun)
    {
        return view('admin.akun.edit')->with([
            'akun'     => Akun::find($id_akun),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_akun)
    {


        $save = akun::find($id_akun);
        $save->nama_akun       = $request->nama_akun;
        $save->jenis_akun      = $request->jenis_akun;
        $save->link            = $request->link;
        $save->username        = $request->username;
        $save->email           = $request->email;
        $save->password        = $request->password;
        $save->ket             = $request->ket;
        $save->save();

        return redirect()->route('akun.index')->with('success', 'Data Berhasil di Ubah');
    }
    public function destroy($id_akun)
    {
        $data = Akun::find($id_akun);
        $data->delete();

        return back()->with('success', 'Data Berhasil di Hapus!.');
    }
}
