<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WNA;

class WNAController extends Controller
{
    public function index()
    {
        $wna = WNA::all();
        return view('KEPENDUDUKAN.WNA.index', compact('wna'));
    }

    public function create(Request $request)
    {
        $existingWNA = WNA::where('NoIDNasional', $request->NoIDNasional)->first();

        if ($existingWNA) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/wna');
        } else {

        $data = new WNA();
            $data->NoIDNasional = $request->NoIDNasional;
            $data->JenisVisa = $request->JenisVisa;
            $data->NoIzinTinggal = $request->NoIzinTinggal;
            $data->Kewarganegaraan = $request->Kewarganegaraan;
        $data -> save();
        session()->flash('success', 'Save Data Successfully!');
        return Redirect('/wna');
        }
    }

    public function update(Request $request, $id)
    {
        $data = WNA::where('NoIDNasional', $id)->first();
            $data->NoIDNasional = $request->NoIDNasional;
            $data->JenisVisa = $request->JenisVisa;
            $data->NoIzinTinggal = $request->NoIzinTinggal;
            $data->Kewarganegaraan = $request->Kewarganegaraan;
        $data -> save();
        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/wna');
    }

    public function delete(Request $request, $id)
    {
        $wna = WNA::where('NoIDNasional', $id);
        $wna->delete();
        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/wna');
    }
}
