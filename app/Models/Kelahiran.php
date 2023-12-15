<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    protected $table = 'DATA_KELAHIRAN';
    protected $primaryKey = 'NoAkta';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'NoAkta', 'NIKAyah', 'NIKIbu', 'BeratLahir', 'PanjangLahir',
        'JamKelahiran', 'TanggalKelahiran', 'TempatKelahiran', 'NoKK',
    ];

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'NoKK', 'NoKK');
    }
    public $timestamps = false;
}
