<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    public function index()
    {
        $pekerjaan = Pekerjaan::all();
        return view('PENDATAAN.Pekerjaan.index', compact('pekerjaan'));
    }

    public function create(Request $request)
    {
        $existingPekerjaan = Pekerjaan::where('IDPekerjaan', $request->IDPekerjaan)->first();

        if ($existingPekerjaan) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/pekerjaan');
        } else {

        $data = new Pekerjaan();
            $data->IDPekerjaan = $request->IDPekerjaan;
            $data->LokasiPekerjaan = $request->LokasiPekerjaan;
            $data->NamaPekerjaan = $request->NamaPekerjaan;
            $data->NoIDNasional = $request->NoIDNasional;
        $data -> save();
        session()->flash('success', 'Save Data Successfully!');
        return Redirect('/pekerjaan');
        }
    }

    public function update(Request $request, $id)
    {
        $data = Pekerjaan::where('IDPekerjaan', $id)->first();
            $data->IDPekerjaan = $request->IDPekerjaan;
            $data->LokasiPekerjaan = $request->LokasiPekerjaan;
            $data->NamaPekerjaan = $request->NamaPekerjaan;
            $data->NoIDNasional = $request->NoIDNasional;
        $data -> save();
        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/pekerjaan');
    }

    public function delete(Request $request, $id)
    {
        $pekerjaan = Pekerjaan::where('IDPekerjaan', $id);
        $pekerjaan->delete();

        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/pekerjaan');
    }
}
