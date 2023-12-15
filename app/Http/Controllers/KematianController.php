<?php

namespace App\Http\Controllers;

use App\Models\Kematian;
use Illuminate\Http\Request;

class KematianController extends Controller
{
    public function index()
    {
        $kematian = Kematian::all();
        return view('ADMINISTRASI.Kematian.index', compact('kematian'));
    }
    public function create(Request $request)
    {
        $existingKematian = Kematian::where('NoSuratKematian', $request->NoSuratKematian)->first();

        if ($existingKematian) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/kematian');
        } else {

        $data = new Kematian();
            $data->NoSuratKematian = $request->NoSuratKematian;
            $data->JamKematian = $request->JamKematian;
            $data->TanggalKematian = $request->TanggalKematian;
            $data->TempatKematian = $request->TempatKematian;
            $data->Nama = $request->Nama;
            $data->Pelapor = $request->Pelapor;
            $data->NoKK = $request->NoKK;

        $data -> save();
        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/kematian');
        }
    }

    public function update(Request $request, $id)
    {
        $data = Kematian::where('NoSuratKematian', $id)->first();
            $data->NoSuratKematian = $request->NoSuratKematian;
            $data->JamKematian = $request->JamKematian;
            $data->TanggalKematian = $request->TanggalKematian;
            $data->TempatKematian = $request->TempatKematian;
            $data->Nama = $request->Nama;
            $data->Pelapor = $request->Pelapor;
            $data->NoKK = $request->NoKK;
        $data -> save();
        session()->flash('success', 'Edit  Data Successfully!');
        return Redirect('/kematian');
    }

    public function delete(Request $request, $id)
    {
        $kematian = Kematian::where('NoSuratKematian', $id);
        $kematian->delete();
        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/kematian');
    }
}
