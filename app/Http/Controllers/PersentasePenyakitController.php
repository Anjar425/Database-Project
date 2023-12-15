<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PersentasePenyakitController extends Controller
{
    public function namaPenyakitPersentase(){
        $result = DB::table('RIWAYAT_PENYAKIT as RP')
            ->join('MEMPUNYAI as M', 'RP.IDPenyakit', '=', 'M.IDPenyakit')
            ->join('PENDUDUK as P', 'M.NoIDNasional', '=', 'P.NoIDNasional')
            ->select('RP.NamaPenyakit', DB::raw('COUNT(*) * 100.0 / (SELECT COUNT(*) FROM PENDUDUK) AS Persentase'))
            ->groupBy('RP.NamaPenyakit')
            ->get();

        return view('INFORMASI.PresentasePenyakit', ['result' => $result]);
    }
}
