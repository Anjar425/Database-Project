<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoTelKeluarga extends Model
{
    use HasFactory;
    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'NoKK', 'NoKK');
    }
}
