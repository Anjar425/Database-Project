<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transmigrasi extends Model
{
    protected $table = 'TRANSMIGRASI';
    protected $primaryKey = 'IDMigrasi';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = ['IDMigrasi', 'LokasiTransmigrasi', 'AlamatAsal'];

    // Relationships
    public function migrasi()
    {
        return $this->belongsTo(Migrasi::class, 'IDMigrasi', 'IDMigrasi');
    }
}
