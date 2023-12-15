<?php

namespace App\Http\Controllers;

use App\Models\Perkawinan;
use Illuminate\Http\Request;

class PerkawinanController extends Controller
{
    public function index()
    {
        $perkawinan = Perkawinan::all();
        return view('PENDATAAN.Perkawinan.index', compact('perkawinan'));
    }


    public function create(Request $request)
    {
        $existingPerkawinan = Perkawinan::where('NoNikah', $request->NoNikah)->first();

        if ($existingPerkawinan) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/perkawinan');
        } else {

        $data = new Perkawinan();
            $data->NoNikah = $request->NoNikah;
            $data->WaktuNikah = $request->WaktuNikah;
            $data->NamaIstri = $request->NamaIstri;
            $data->NoIDNasional = $request->NoIDNasional;
        $data -> save();
        session()->flash('success', 'Save Data Successfully!');
        return Redirect('/perkawinan');
        }
    }

    public function update(Request $request, $id)
    {
        $data = Perkawinan::where('NoNikah', $id)->first();
            $data->NoNikah = $request->NoNikah;
            $data->WaktuNikah = $request->WaktuNikah;
            $data->NamaIstri = $request->NamaIstri;
            $data->NoIDNasional = $request->NoIDNasional;
        $data -> save();
        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/perkawinan');
    }

    public function delete(Request $request, $id)
    {
        $perkawinan = Perkawinan::where('NoNikah', $id);
        $perkawinan->delete();
        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/perkawinan');
    }
}
