<?php

namespace App\Http\Controllers;

use App\Models\Wirausaha;
use Illuminate\Http\Request;

class WirausahaController extends Controller
{
    public function index()
    {
        $wiraswasta = Wirausaha::all();
        return view('PENDATAAN.Pekerjaan.Wiraswasta.index', compact('wiraswasta'));
    }

    public function create(Request $request)
    {
        $existingWiraswasta = Wirausaha::where('IDPekerjaan', $request->IDPekerjaan)->first();

        if ($existingWiraswasta) {
            session()->flash('fail', 'Save Data Failed!');
            return Redirect('/wiraswasta');
        } else {
            $data = new Wirausaha();
            $data->IDPekerjaan = $request->IDPekerjaan;
            $data->JenisUsaha = $request->JenisUsaha;

            $data->save();

            session()->flash('success', 'Save Data Successfully!');
            return Redirect('/wiraswasta');
        }
    }

    public function edit($id)
    {
        $wiraswasta = Wirausaha::find($id);
        return view('PENDATAAN.Wirausaha.edit', compact('wiraswasta'));
    }

    public function update(Request $request, $id)
    {
        $data = Wirausaha::where('IDPekerjaan', $id)->first();
        $data->IDPekerjaan = $request->IDPekerjaan;
        $data->JenisUsaha = $request->JenisUsaha;
        $data->save();

        session()->flash('success', 'Edit Data Successfully!');
        return Redirect('/wiraswasta');
    }

    public function delete(Request $request, $id)
    {
        $wiraswasta = Wirausaha::where('IDPekerjaan', $id);
        $wiraswasta->delete();

        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/wiraswasta');
    }
}
