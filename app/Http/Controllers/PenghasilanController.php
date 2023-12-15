<?php

namespace App\Http\Controllers;

use App\Models\Penghasilan;
use Illuminate\Http\Request;

class PenghasilanController extends Controller
{
    public function index()
    {
        $penghasilan = Penghasilan::all();
        return view('PENDATAAN.Penghasilan.index', compact('penghasilan'));
    }

    public function create(Request $request)
    {
        $existingPenyakit = Penghasilan::where('IDPenghasilan', $request->IDPenghasilan)->first();

        if ($existingPenyakit) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/penghasilan');
        } else {
            $data = new Penghasilan();
            $data->IDPenghasilan = $request->IDPenghasilan;
            $data->JumlahPenghasilan = $request->JumlahPenghasilan;

            $data->save();

            session()->flash('success', 'Save Data Successfully!');
            return Redirect('/penghasilan');
        }
    }

    public function update(Request $request, $id)
    {
        $data = Penghasilan::where('IDPenghasilan', $id)->first();
        $data->IDPenghasilan = $request->IDPenghasilan;
        $data->JumlahPenghasilan = $request->JumlahPenghasilan;

        $data->save();

        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/penghasilan');
    }

    public function delete(Request $request, $id)
    {
        $penghasilan = Penghasilan::where('IDPenghasilan', $id);
        $penghasilan->delete();

        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/penghasilan');
    }
}
