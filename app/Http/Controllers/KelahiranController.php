<?php

namespace App\Http\Controllers;

use App\Models\Kelahiran;
use Illuminate\Http\Request;

class KelahiranController extends Controller
{
    public function index()
    {
        $kelahiran = Kelahiran::all();
        return view('ADMINISTRASI.Kelahiran.index', compact('kelahiran'));
    }

    public function create(Request $request)
    {
        $existingKelahiran = Kelahiran::where('NoAkta', $request->NoAkta)->first();

        if ($existingKelahiran) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/Kelahiran');
        } else {

        $data = new Kelahiran();
            $data->NoAkta = $request->NoAkta;
            $data->NIKAyah = $request->NIKAyah;
            $data->NIKIbu = $request->NIKIbu;
            $data->BeratLahir = $request->BeratLahir;
            $data->PanjangLahir = $request->PanjangLahir;
            $data->JamKelahiran = $request->JamKelahiran;
            $data->TanggalKelahiran = $request->TanggalKelahiran;
            $data->TempatKelahiran = $request->TempatKelahiran;
            $data->NoKK = $request->NoKK;

        $data -> save();
        session()->flash('success', 'Save Data Successfully!');
        return Redirect('/kelahiran');
        }
    }

    public function update(Request $request, $id)
    {
        $data = Kelahiran::where('NoAkta', $id)->first();
            $data->NoAkta = $request->NoAkta;
            $data->NIKAyah = $request->NIKAyah;
            $data->NIKIbu = $request->NIKIbu;
            $data->BeratLahir = $request->BeratLahir;
            $data->PanjangLahir = $request->PanjangLahir;
            $data->JamKelahiran = $request->JamKelahiran;
            $data->TanggalKelahiran = $request->TanggalKelahiran;
            $data->TempatKelahiran = $request->TempatKelahiran;
            $data->NoKK = $request->NoKK;
        $data -> save();
        session()->flash('success', 'Edit  Data Successfully!');
        return Redirect('/kelahiran');
    }

    public function delete(Request $request, $id)
    {
        $kelahiran = Kelahiran::where('NoAkta', $id);
        $kelahiran->delete();
        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/kelahiran');
    }
}