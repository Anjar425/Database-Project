<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = Pendidikan::all();
        return view('PENDATAAN.Pendidikan.index', compact('pendidikan'));
    }

    public function create(Request $request)
    {
        $existingPendidikan = Pendidikan::where('NoInduk', $request->NoInduk)->first();

        if ($existingPendidikan) {
            session()->flash('fail', 'Save Data Failed! No Induk already exists.');
            return redirect('/pendidikan');
        } else {
            $data = new Pendidikan();
            $data->NoInduk = $request->NoInduk;
            $data->NamaInstansi = $request->NamaInstansi;
            $data->KotaInstansi = $request->KotaInstansi;
            $data->NoIDNasional = $request->NoIDNasional;
            $data->save();

            session()->flash('success', 'Save Data Successfully!');
            return redirect('/pendidikan');
        }
    }

    public function update(Request $request, $id)
    {
        $data = Pendidikan::where('NoInduk', $id)->first();

        if (!$data) {
            session()->flash('fail', 'Data not found!');
            return redirect('/pendidikan');
        }

        $data->NoInduk = $request->NoInduk;
        $data->NamaInstansi = $request->NamaInstansi;
        $data->KotaInstansi = $request->KotaInstansi;
        $data->NoIDNasional = $request->NoIDNasional;
        $data->save();

        session()->flash('success', 'Edit Data Successfully!');
        return redirect('/pendidikan');
    }

    public function delete(Request $request, $id)
    {
        $pendidikan = Pendidikan::where('NoInduk', $id);
        $pendidikan->delete();
        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/pendidikan');
    }
}
