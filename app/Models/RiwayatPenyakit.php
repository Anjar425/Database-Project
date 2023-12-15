<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatPenyakit extends Model
{
    protected $table = 'RIWAYAT_PENYAKIT';
    protected $primaryKey = 'IDPenyakit';
    public $timestamps = false;
    protected $keyType = 'string';

    // Fillable fields if needed
    protected $fillable = [
        'IDPenyakit',
        'NamaPenyakit',
    ];

    // Relationships if needed
    public function penduduk()
    {
        return $this->belongsToMany(Penduduk::class, 'MEMPUNYAI', 'IDPenyakit', 'NoIDNasional');
    }
}
