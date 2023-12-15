<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menerima extends Model
{
    use HasFactory;
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'NoIDNasional', 'NoIDNasional');
    }

    public function bantuan()
    {
        return $this->belongsTo(Bantuan::class, 'IDBantuan', 'IDBantuan');
    }
}
