<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rumah_sakit;

class RSController extends Controller
{
    public function index()
    {
        $rs = Rumah_sakit::get();
        return view('RS.index')->with('rs',$rs);
    }
    public function create()
    {
        return view('RS.tambah');
    }
    public function store(Request $request)
    {
        $rs = new Rumah_sakit;
        $rs -> nama_rs = $request -> nama_rs;
        $rs -> alamat = $request -> alamat;
        $rs -> email = $request -> email;
        $rs -> telepon = $request -> telepon;
        $rs -> save();
        return redirect('/rs')->with('alert-success','Data Berhasil di Tambah');
        
    }
    public function edit($id)
    {
        $rs = Rumah_sakit::findOrFail($id);
        return view('RS.edit')->with('rs',$rs);
    }
    public function update(Request $request, $id)
    {
        $rs = Rumah_sakit::find($id);
        $rs -> nama_rs = $request -> nama_rs;
        $rs -> alamat = $request -> alamat;
        $rs -> email = $request -> email;
        $rs -> telepon = $request -> telepon;
        $rs -> save();
        return redirect('/rs')->with('alert-success','Data Berhasil Diubah');
    }
    public function destroy($id){
        $rs = Rumah_sakit::findOrFail($id);
        $rs ->delete();
        return redirect('/rs')->with('alert-success','Data Berhasil Dihapus');
    }
}
