<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use Illuminate\Http\Request;

class BantuanController extends Controller
{
    public function index()
    {
        $bantuan = Bantuan::all();
        return view('ADMINISTRASI.Bantuan.index', compact('bantuan'));
    }

    public function create(Request $request)
    {
        $existingBantuan = Bantuan::where('IDBantuan', $request->IDBantuan)->first();

        if ($existingBantuan) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/bantuan');
        } else {

        $data = new Bantuan();
            $data->IDBantuan = $request->IDBantuan;
            $data->JenisBantuan = $request->JenisBantuan;
            $data->Syarat = $request->Syarat;
        $data -> save();
        session()->flash('success', 'Save Data Successfully!');
        return Redirect('/bantuan');
        }
    }

    public function update(Request $request, $id){
        $data = Bantuan::where('IDBantuan', $id)->first();
        $existingBantuan = Bantuan::where('IDBantuan', $request->IDBantuan)->first();

        if ($existingBantuan ==  $data->IDBantuan) {
            session()->flash('fail', 'Edit Data Failed!');
            return Redirect('/bantuan');
        }
            $data->IDBantuan = $request->IDBantuan;
            $data->JenisBantuan = $request->JenisBantuan;
            $data->Syarat = $request->Syarat;
        $data -> save();
        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/bantuan');
    }

    public function delete(Request $request, $id)
    {
        $bantuan = Bantuan::where('IDBantuan', $id);
        $bantuan->delete();
        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/bantuan');
    }
}
