<?php

namespace App\Http\Controllers;

use App\Models\Transmigrasi;
use Illuminate\Http\Request;

class TransmigrasiController extends Controller
{
    public function index()
    {
        $transmigrasi = Transmigrasi::all();
        return view('PENDATAAN.Migrasi.Transmigrasi.index', compact('transmigrasi'));
    }

    public function create(Request $request)
    {
        $existingTransmigrasi = Transmigrasi::where('IDMigrasi', $request->IDMigrasi)->first();

        if ($existingTransmigrasi) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/transmigrasi');
        } else {
            $data = new Transmigrasi();
            $data->IDMigrasi = $request->IDMigrasi;
            $data->LokasiTransmigrasi = $request->LokasiTransmigrasi;
            $data->AlamatAsal = $request->AlamatAsal;

            $data->save();

            session()->flash('success', 'Save Data Successfully!');
            return Redirect('/transmigrasi');
        }
    }

    public function edit($id)
    {
        $transmigrasi = Transmigrasi::find($id);
        return view('PENDATAAN.Transmigrasi.edit', compact('transmigrasi'));
    }

    public function update(Request $request, $id)
    {
        $data = Transmigrasi::where('IDMigrasi', $id)->first();
        $data->IDMigrasi = $request->IDMigrasi;
        $data->LokasiTransmigrasi = $request->LokasiTransmigrasi;
        $data->AlamatAsal = $request->AlamatAsal;

        $data->save();

        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/transmigrasi');
    }

    public function delete(Request $request, $id)
    {
        $transmigrasi = Transmigrasi::where('IDMigrasi', $id);
        $transmigrasi->delete();

        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/transmigrasi');
    }
}
 