<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaPerkawinan extends Model
{
    use HasFactory;
    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'NoKK', 'NoKK');
    }

    public function perkawinan()
    {
        return $this->belongsTo(Perkawinan::class, 'NoNikah', 'NoNikah');
    }
}
