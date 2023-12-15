<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use Dflydev\DotAccessData\Data;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Redirect;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduk = Penduduk::all();
        return view('KEPENDUDUKAN.Penduduk.index', compact('penduduk'));
    }


    public function create(Request $request)
    {
        $existingPenduduk = Penduduk::where('NoIDNasional', $request->NoIDNasional)->first();

        if ($existingPenduduk) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/penduduk');
        } else {

        $data = new Penduduk();
            $data->NoIDNasional = $request->NoIDNasional;
            $data->Nama = $request->Nama;
            $data->Status = $request->Status;
            $data->GolDarah = $request->GolDarah;
            $data->JenisKelamin = $request->JenisKelamin;
            $data->Usia = $request->Usia;
            $data->Agama = $request->Agama;
            $data->Kecamatan = $request->Kecamatan;
            $data->Kabupaten = $request->Kabupaten;
            $data->Provinsi = $request->Provinsi;
            $data->TanggalLahir = $request->TanggalLahir;
            $data->TempatLahir = $request->TempatLahir;
            $data->NoKK = $request->NoKK;
        $data -> save();
        session()->flash('success', 'Save Data Successfully!');
        return Redirect('/penduduk');
        }
    }

    public function update(Request $request, $id)
    {
        $data = Penduduk::where('NoIDNasional', $id)->first();
            $data->NoIDNasional = $request->NoIDNasional;
            $data->Nama = $request->Nama;
            $data->Status = $request->Status;
            $data->GolDarah = $request->GolDarah;
            $data->JenisKelamin = $request->JenisKelamin;
            $data->Usia = $request->Usia;
            $data->Agama = $request->Agama;
            $data->Kecamatan = $request->Kecamatan;
            $data->Kabupaten = $request->Kabupaten;
            $data->Provinsi = $request->Provinsi;
            $data->TanggalLahir = $request->TanggalLahir;
            $data->TempatLahir = $request->TempatLahir;
            $data->NoKK = $request->NoKK;
        $data -> save();
        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/penduduk');
    }

    public function delete(Request $request, $id)
    {
        $penduduk = Penduduk::where('NoIDNasional', $id);
        $penduduk->delete();
        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/penduduk');
    }
}
