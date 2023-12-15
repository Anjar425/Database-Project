<?php

namespace App\Http\Controllers;

use App\Models\MediaSosial;
use Illuminate\Http\Request;

class MediaSosialController extends Controller
{
    public function index()
    {
        $mediaSosial = MediaSosial::all();
        return view('PENDATAAN.Medsos.index', compact('mediaSosial'));
    }

    public function create(Request $request)
    {
        $existingMediaSosial = MediaSosial::where('UserID', $request->UserID)->first();

        if ($existingMediaSosial) {
            session()->flash('fail', 'Save Data Failed! User ID already exists.');
            return redirect('/medsos');
        } else {
            $data = new MediaSosial();
            $data->UserID = $request->UserID;
            $data->Username = $request->Username;
            $data->JenisMedsos = $request->JenisMedsos;
            $data->LamaPenggunaan = $request->LamaPenggunaan;
            $data->NoIDNasional = $request->NoIDNasional;
            $data->save();
            session()->flash('success', 'Save Data Successfully!');
            return redirect('/medsos');
        }
    }

    public function update(Request $request, $id)
    {
        $data = MediaSosial::where('UserID', $id)->first();

        if (!$data) {
            session()->flash('fail', 'Data not found!');
            return redirect('/medsos');
        }

        $data->UserID = $request->UserID;
        $data->Username = $request->Username;
        $data->JenisMedsos = $request->JenisMedsos;
        $data->LamaPenggunaan = $request->LamaPenggunaan;
        $data->NoIDNasional = $request->NoIDNasional;
        $data->save();

        session()->flash('success', 'Edit Data Successfully!');
        return redirect('/medsos');
    }
    public function delete(Request $request, $id)
    {
        $mediaSosial = MediaSosial::where('UserID', $id);
        $mediaSosial->delete();
        session()->flash('success', 'Delete Data Successfully!');
        return redirect('/medsos');
    }
}
