<?php

namespace App\Http\Controllers;

use App\Models\Emigrasi;
use Illuminate\Http\Request;

class EmigrasiController extends Controller
{
    public function index()
    {
        $emigrasi = Emigrasi::all();
        return view('PENDATAAN.Migrasi.Emigrasi.index', compact('emigrasi'));
    }

    public function create(Request $request)
    {
        $existingEmigrasi = Emigrasi::where('IDMigrasi', $request->IDMigrasi)->first();

        if ($existingEmigrasi) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/emigrasi');
        } else {
            $data = new Emigrasi();
            $data->IDMigrasi = $request->IDMigrasi;
            $data->ENegaraTujuan = $request->ENegaraTujuan;
            $data->ENoPaspor = $request->ENoPaspor;

            $data->save();

            session()->flash('success', 'Save Data Successfully!');
            return Redirect('/emigrasi');
        }
    }

    public function edit($id)
    {
        $emigrasi = Emigrasi::find($id);
        return view('PENDATAAN.Emigrasi.edit', compact('emigrasi'));
    }

    public function update(Request $request, $id)
    {
        $data = Emigrasi::where('IDMigrasi', $id)->first();
        $data->IDMigrasi = $request->IDMigrasi;
        $data->ENegaraTujuan = $request->ENegaraTujuan;
        $data->ENoPaspor = $request->ENoPaspor;

        $data->save();

        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/emigrasi');
    }

    public function delete(Request $request, $id)
    {
        $emigrasi = Emigrasi::where('IDMigrasi', $id);
        $emigrasi->delete();

        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/emigrasi');
    }
} 
