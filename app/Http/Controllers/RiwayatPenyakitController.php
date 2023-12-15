<?php

namespace App\Http\Controllers;

use App\Models\RiwayatPenyakit;
use Illuminate\Http\Request;

class RiwayatPenyakitController extends Controller
{
    public function index()
    {
        $penyakit = RiwayatPenyakit::all();
        return view('PENDATAAN.Penyakit.index', compact('penyakit'));
    }

    public function create(Request $request)
    {
        $existingPenyakit = RiwayatPenyakit::where('IDPenyakit', $request->IDPenyakit)->first();

        if ($existingPenyakit) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/penyakit');
        } else {
            $data = new RiwayatPenyakit();
            $data->IDPenyakit = $request->IDPenyakit;
            $data->NamaPenyakit = $request->NamaPenyakit;

            $data->save();

            session()->flash('success', 'Save Data Successfully!');
            return Redirect('/penyakit');
        }
    }

    public function edit($id)
    {
        $penyakit = RiwayatPenyakit::find($id);
        return view('PENDATAAN.RiwayatPenyakit.edit', compact('penyakit'));
    }

    public function update(Request $request, $id)
    {
        $data = RiwayatPenyakit::where('IDPenyakit', $id)->first();
        $data->IDPenyakit = $request->IDPenyakit;
        $data->NamaPenyakit = $request->NamaPenyakit;

        $data->save();

        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/penyakit');
    }

    public function delete(Request $request, $id)
    {
        $penyakit = RiwayatPenyakit::where('IDPenyakit', $id);
        $penyakit->delete();

        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/penyakit');
    }
}
