<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{

    protected $table = 'PENDIDIKAN';
    protected $primaryKey = 'NoInduk';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'NoInduk',
        'NamaInstansi',
        'KotaInstansi',
        'NoIDNasional',
    ];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'NoIDNasional', 'NoIDNasional');
    }

    // Tambahan jika Anda ingin menggunakan timestamp (created_at, updated_at)
    public $timestamps = false;
}
