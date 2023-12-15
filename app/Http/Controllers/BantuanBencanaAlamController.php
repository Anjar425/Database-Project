<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MENERIMA;
use App\Models\BANTUAN;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;

class BantuanBencanaAlamController extends Controller
{
    public function index(){
        $data = Penduduk::join('MENERIMA', 'PENDUDUK.NoIDNasional', '=', 'MENERIMA.NoIDNasional')
            ->join('BANTUAN', 'MENERIMA.IDBantuan', '=', 'BANTUAN.IDBantuan')
            ->where('BANTUAN.Syarat', 'Bencana Alam')
            ->where('PENDUDUK.Status', 'Menikah')
            ->where(function(Builder $query){
                $query->where('BANTUAN.JenisBantuan', 'Uang')
                ->orWhere('BANTUAN.JenisBantuan', 'Sembako');
            })
            ->orderBy('PENDUDUK.NoIDNasional')
            ->get();


        return view('INFORMASI.Bantuan', ['data' => $data]);
    }
}
