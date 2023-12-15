<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Migrasi;
use Illuminate\Support\Facades\Redirect;

class MigrasiController extends Controller
{
    public function index()
    {
        $migrasi = Migrasi::all();
        return view('PENDATAAN.Migrasi.index', compact('migrasi'));
    }

    public function create(Request $request)
    {
        $existingMigrasi = Migrasi::where('IDMigrasi', $request->IDMigrasi)->first();

        if ($existingMigrasi) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/migrasi');
        } else {
            $data = new Migrasi();
            $data->IDMigrasi = $request->IDMigrasi;
            $data->WaktuMigrasi = $request->WaktuMigrasi;
            $data->NoIDNasional = $request->NoIDNasional;

            $data->save();

            session()->flash('success', 'Save Data Successfully!');
            return Redirect('/migrasi');
        }
    }

    public function edit($id)
    {
        $migrasi = Migrasi::find($id);
        return view('PENDATAAN.Migrasi.edit', compact('migrasi'));
    }

    public function update(Request $request, $id)
    {
        $data = Migrasi::where('IDMigrasi', $id)->first();
        $data->IDMigrasi = $request->IDMigrasi;
        $data->WaktuMigrasi = $request->WaktuMigrasi;
        $data->NoIDNasional = $request->NoIDNasional;

        $data->save();

        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/migrasi');
    }

    public function delete(Request $request, $id)
    {
        $migrasi = Migrasi::where('IDMigrasi', $id);
        $migrasi->delete();

        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/migrasi');
    }
}
