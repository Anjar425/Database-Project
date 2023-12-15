<?php

namespace App\Http\Controllers;

use App\Models\Pajak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PajakController extends Controller
{
    public function index()
    {
        $pajak = Pajak::all();
        return view('ADMINISTRASI.Pajak.index', compact('pajak'));
    }

    public function create(Request $request)
    {
        $existingPajak = Pajak::where('NPWP', $request->NPWP)->first();

        if ($existingPajak) {
            session()->flash('fail', 'Save Data Failed! Pajak with NPWP already exists.');
            return Redirect('/pajak');
        } else {
            $data = new Pajak();
            $data->NPWP = $request->NPWP;
            $data->PajakPenghasilan = $request->PajakPenghasilan;
            $data->PBB = $request->PBB;
            $data->PajakKendaraan = $request->PajakKendaraan;
            $data->JumlahPajak = $request->JumlahPajak;
            $data->IDPenghasilan = $request->IDPenghasilan;
            $data->NoIDNasional = $request->NoIDNasional;

            $data->save();
            session()->flash('success', 'Save Data Successfully!');
            return Redirect('/pajak');
        }
    }

    public function update(Request $request, $id)
    {
        $data = Pajak::where('NPWP', $id)->first();

        if (!$data) {
            session()->flash('fail', 'Pajak with NPWP not found!');
            return Redirect('/pajak');
        }

        $data->NPWP = $request->NPWP;
        $data->PajakPenghasilan = $request->PajakPenghasilan;
        $data->PBB = $request->PBB;
        $data->PajakKendaraan = $request->PajakKendaraan;
        $data->JumlahPajak = $request->JumlahPajak;
        $data->IDPenghasilan = $request->IDPenghasilan;
        $data->NoIDNasional = $request->NoIDNasional;

        $data->save();
        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/pajak');
    }

    public function delete(Request $request, $id)
    {
        $pajak = Pajak::where('NPWP', $id);
        $pajak->delete();
        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/pajak');
    }
}
