<?php

namespace App\Http\Controllers;

use App\Models\PenanggungJawab;
use Illuminate\Http\Request;

class PenanggungJawabController extends Controller
{
    public function index()
    {
        $penanggungjawab = PenanggungJawab::all();
        return view('KEPENDUDUKAN.PenanggungJawab.index', compact('penanggungjawab'));
    }

    public function create(Request $request)
    {
        $existingPenanggungJawab = PenanggungJawab::where('IDPK', $request->IDPK)->first();

        if ($existingPenanggungJawab) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/penanggungjawab');
        } else {

        $data = new PenanggungJawab();
            $data->IDPK = $request->IDPK;
            $data->NoKK = $request->NoKK;
        $data -> save();
        session()->flash('success', 'Save Data Successfully!');
        return Redirect('/penanggungjawab');
        }
    }

    public function update(Request $request, $id)
    {
        $data = PenanggungJawab::where('IDPK', $id)->first();
            $data->IDPK = $request->IDPK;
            $data->NoKK = $request->NoKK;
        $data -> save();
        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/penanggungjawab');
    }

    public function delete(Request $request, $id)
    {
        $penanggungjawab = PenanggungJawab::where('IDPK', $id);
        $penanggungjawab->delete();
        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/penanggungjawab');
    }
}
