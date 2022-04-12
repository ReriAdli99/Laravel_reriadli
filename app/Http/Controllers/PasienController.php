<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use App\Rumah_Sakit;

class PasienController extends Controller
{
    public function index( Request $request)
    {
        
        $rs = Rumah_Sakit::get();
        if($request->ajax() && $request->id != null)
        {
            $pasien = Pasien::where('rumah_sakit_id',$request->id)->render();
            return view('Pasien.child')->with('pasien', $pasien);
        }
        if($request->ajax())
        {
            $pasien = Pasien::get();
            return view('Pasien.child')->with('pasien', $pasien)->render();
        }
        $pasien = Pasien::get();
        return view('Pasien.index')->with('pasien', $pasien)->with('rs', $rs);
        
    }
    public function create()
    {
        $rs = Rumah_Sakit::get();
        return view('Pasien.tambah')->with('rs', $rs);
    }
    public function store(Request $request)
    {
        $pasien = new Pasien;
        $pasien-> nama = $request -> nama;
        $pasien -> rumah_sakit_id = $request -> id;
        $pasien -> alamat = $request -> alamat;
        $pasien -> no_telpon = $request -> no_telpon;
        $pasien -> save();
        return redirect('/pasien')->with('alert-success','Data Berhasil di Tambah');
    }
    public function edit($id)
    {
        $rs = Rumah_Sakit::get();
        $pasien = Pasien::findOrFail($id);
        return view('Pasien.edit')->with('pasien',$pasien)->with('rs',$rs);
    }
    public function update(Request $request, $id)
    {
        $pasien = Pasien::find($id);
        $pasien -> rumah_sakit_id = $request -> id;
        $pasien -> alamat = $request -> alamat;
        $pasien -> no_telpon = $request -> no_telpon;
        $pasien -> save();
        return redirect('/pasien')->with('alert-success','Data Berhasil Diubah');
    }
    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien ->delete();
        return redirect('/pasien')->with('alert-success','Data Berhasil Dihapus');
    }
    public function filter(Request $request){
        $pasien = Pasien::where('rumah_sakit_id', $request->id)->get();
        return response()->json($pasien);

    }

}
