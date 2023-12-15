<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    protected $table = 'DATA_KEMATIAN';
    protected $primaryKey = 'NoSuratKematian';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'NoSuratKematian', 'JamKematian', 'TanggalKematian', 'TempatKematian',
        'Nama', 'Pelapor', 'NoKK',
    ];

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'NoKK', 'NoKK');
    }
    public $timestamps = false;
}
