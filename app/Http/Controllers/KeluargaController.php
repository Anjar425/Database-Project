<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    public function index()
    {
        $keluarga = Keluarga::all();
        return view('KEPENDUDUKAN.Keluarga.index', compact('keluarga'));
    }

    public function create(Request $request)
    {
        $existingKeluarga = Keluarga::where('NoKK', $request->NoKK)->first();

        if ($existingKeluarga) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/keluarga');
        } else {

        $data = new Keluarga();
            $data->NoKK = $request->NoKK;
            $data->NoTelpKepKel = $request->NoTelpKepKel;
            $data->NamaKepKel = $request->NamaKepKel;
        $data -> save();
        session()->flash('success', 'Save Data Successfully!');
        return Redirect('/keluarga');
        }
    }

    public function update(Request $request, $id)
    {
        $data = Keluarga::where('NoKK', $id)->first();
            $data->NoKK = $request->NoKK;
            $data->NoTelpKepKel = $request->NoTelpKepKel;
            $data->NamaKepKel = $request->NamaKepKel;
        $data -> save();
        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/keluarga');
    }

    public function delete(Request $request, $id)
    {
        $keluarga = Keluarga::where('NoKK', $id);
        $keluarga->delete();
        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/keluarga');
    }
}
