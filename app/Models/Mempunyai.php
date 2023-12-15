<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mempunyai extends Model
{
    protected $table = 'MEMPUNYAI';
    public $timestamps = false;

    // Fillable fields if needed
    protected $fillable = [
        'NoIDNasional',
        'IDPenyakit',
    ];

    // Relationships if needed
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'NoIDNasional', 'NoIDNasional');
    }

    public function riwayatPenyakit()
    {
        return $this->belongsTo(RiwayatPenyakit::class, 'IDPenyakit', 'IDPenyakit');
    }
}
