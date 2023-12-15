<?php

namespace App\Http\Controllers;

use App\Models\Swasta;
use Illuminate\Http\Request;

class SwastaController extends Controller
{
    public function index()
    {
        $swasta = Swasta::all();
        return view('PENDATAAN.Pekerjaan.Swasta.index', compact('swasta'));
    }

    public function create(Request $request)
    {
        $existingSwasta = Swasta::where('IDPekerjaan', $request->IDPekerjaan)->first();

        if ($existingSwasta) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/swasta');
        } else {

        $data = new Swasta();
            $data->IDPekerjaan = $request->IDPekerjaan;
            $data->NamaPerusahaan = $request->NamaPerusahaan;
            $data->SJabatan = $request->SJabatan;
            $data->Kontak = $request->Kontak;
        $data -> save();
        session()->flash('success', 'Save Data Successfully!');
        return Redirect('/swasta');
        }
    }

    public function update(Request $request, $id)
    {
        $data = Swasta::where('IDPekerjaan', $id)->first();
            $data->IDPekerjaan = $request->IDPekerjaan;
            $data->NamaPerusahaan = $request->NamaPerusahaan;
            $data->SJabatan = $request->SJabatan;
            $data->Kontak = $request->Kontak;
        $data -> save();
        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/swasta');
    }
    public function delete(Request $request, $id)
    {
        $swasta = Swasta::where('IDPekerjaan', $id);
        $swasta->delete();
        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/swasta');
    }
}
