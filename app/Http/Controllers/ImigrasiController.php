<?php

namespace App\Http\Controllers;

use App\Models\Imigrasi;
use Illuminate\Http\Request;

class ImigrasiController extends Controller
{
    public function index()
    {
        $imigrasi = Imigrasi::all();
        return view('PENDATAAN.Migrasi.Imigrasi.index', compact('imigrasi'));
    }

    public function create(Request $request)
    {
        $existingImigrasi = Imigrasi::where('IDMigrasi', $request->IDMigrasi)->first();

        if ($existingImigrasi) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/imigrasi');
        } else {
            $data = new Imigrasi();
            $data->IDMigrasi = $request->IDMigrasi;
            $data->INegaraTujuan = $request->INegaraTujuan;
            $data->INegaraAsal = $request->INegaraAsal;
            $data->INoPaspor = $request->INoPaspor;

            $data->save();

            session()->flash('success', 'Save Data Successfully!');
            return Redirect('/imigrasi');
        }
    }

    public function edit($id)
    {
        $imigrasi = Imigrasi::find($id);
        return view('PENDATAAN.Imigrasi.edit', compact('imigrasi'));
    }

    public function update(Request $request, $id)
    {
        $data = Imigrasi::where('IDMigrasi', $id)->first();
        $data->IDMigrasi = $request->IDMigrasi;
        $data->INegaraTujuan = $request->INegaraTujuan;
        $data->INegaraAsal = $request->INegaraAsal;
        $data->INoPaspor = $request->INoPaspor;

        $data->save();

        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/imigrasi');
    }

    public function delete(Request $request, $id)
    {
        $imigrasi = Imigrasi::where('IDMigrasi', $id);
        $imigrasi->delete();

        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/imigrasi');
    }
}
