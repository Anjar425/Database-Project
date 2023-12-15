<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkawinan extends Model
{
    use HasFactory;
    protected $table = 'PERKAWINAN';
    protected $primaryKey = 'NoNikah';
    public $timestamps = false;
    protected $keyType = 'string';

    protected $fillable = [
        'NoNikah',
        'WaktuNikah',
        'NamaIstri',
        'NoIDNasional',
    ];

    // Definisikan relasi dengan tabel PENDUDUK
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'NoIDNasional', 'NoIDNasional');
    }
}
