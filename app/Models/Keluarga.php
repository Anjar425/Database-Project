<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $table = 'KELUARGA';
    protected $primaryKey = 'NoKK';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'NoKK',
        'NoTelpKepKel',
        'NamaKepKel',
    ];

    public function penduduk()
    {
        return $this->hasMany(Penduduk::class, 'NoKK', 'NoKK');
    }

    public function penanggungjawab()
    {
        return $this->hasOne(PenanggungJawab::class, 'NoKK', 'NoKK');
    }

    public function tempatTinggal()
    {
        return $this->hasOne(KeluargaTempatTinggal::class, 'NoKK', 'NoKK');
    }

    public function keluargaPerkawinan()
    {
        return $this->hasOne(KeluargaPerkawinan::class, 'NoKK', 'NoKK');
    }

    public function dataKelahiran()
    {
        return $this->hasOne(Kelahiran::class, 'NoKK', 'NoKK');
    }

    public function dataKematian()
    {
        return $this->hasOne(Kematian::class, 'NoKK', 'NoKK');
    }

    public $timestamps = false;
}
