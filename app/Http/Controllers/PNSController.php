<?php

namespace App\Http\Controllers;

use App\Models\PNS;
use Illuminate\Http\Request;

class PNSController extends Controller
{
    public function index()
    {
        $pns = PNS::all();
        return view('PENDATAAN.Pekerjaan.PNS.index', compact('pns'));
    }

    public function create(Request $request)
    {
        $existingPNS = PNS::where('IDPekerjaan', $request->IDPekerjaan)->first();

        if ($existingPNS) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/pns');
        } else {

        $data = new PNS();
            $data->IDPekerjaan = $request->IDPekerjaan;
            $data->NIP = $request->NIP;
            $data->PJabatan = $request->PJabatan;
            $data->NamaInstansi = $request->NamaInstansi;
            $data->Kontak = $request->Kontak;
        $data -> save();
        session()->flash('success', 'Save Data Successfully!');
        return Redirect('/pns');
        }
    }

    public function update(Request $request, $id)
    {
        $data = PNS::where('IDPekerjaan', $id)->first();
            $data->IDPekerjaan = $request->IDPekerjaan;
            $data->NIP = $request->NIP;
            $data->PJabatan = $request->PJabatan;
            $data->NamaInstansi = $request->NamaInstansi;
            $data->Kontak = $request->Kontak;
        $data -> save();
        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/pns');
    }

    public function delete(Request $request, $id)
    {
        $pns = PNS::where('IDPekerjaan', $id);
        $pns->delete();
        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/pns');
    }
}
