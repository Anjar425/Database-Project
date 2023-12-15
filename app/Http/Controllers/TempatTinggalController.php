<?php

namespace App\Http\Controllers;

use App\Models\TempatTinggal;
use Illuminate\Http\Request;

class TempatTinggalController extends Controller
{
    public function index()
    {
        $tempattinggal = TempatTinggal::all();
        return view('PENDATAAN.TempatTinggal.index', compact('tempattinggal'));
    }

    public function create(Request $request)
    {
        $existingTempatTinggal = TempatTinggal::where('NoDaerah', $request->NoDaerah)->first();

        if ($existingTempatTinggal) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/tempattinggal');
        } else {
            $data = new TempatTinggal();
            $data->NoDaerah = $request->NoDaerah;
            $data->NamaDaerah = $request->NamaDaerah;
            $data->Kecamatan = $request->Kecamatan;
            $data->Kabupaten = $request->Kabupaten;
            $data->Provinsi = $request->Provinsi;

            $data->save();

            session()->flash('success', 'Save Data Successfully!');
            return Redirect('/tempattinggal');
        }
    }

    public function update(Request $request, $id)
    {
        $data = TempatTinggal::where('NoDaerah', $id)->first();
        $data->NoDaerah = $request->NoDaerah;
        $data->NamaDaerah = $request->NamaDaerah;
        $data->Kecamatan = $request->Kecamatan;
        $data->Kabupaten = $request->Kabupaten;
        $data->Provinsi = $request->Provinsi;

        $data->save();

        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/tempattinggal');
    }

    public function delete(Request $request, $id)
    {
        $tempattinggal = TempatTinggal::where('NoDaerah', $id);
        $tempattinggal->delete();

        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/tempattinggal');
    }
}
