<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Migrasi extends Model
{
    protected $table = 'MIGRASI';
    protected $primaryKey = 'IDMigrasi';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = ['IDMigrasi', 'WaktuMigrasi', 'NoIDNasional'];

    // Relationships
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'NoIDNasional', 'NoIDNasional');
    }

    public function transmigrasi()
    {
        return $this->hasOne(Transmigrasi::class, 'IDMigrasi', 'IDMigrasi');
    }

    public function imigrasi()
    {
        return $this->hasOne(Imigrasi::class, 'IDMigrasi', 'IDMigrasi');
    }

    public function emigrasi()
    {
        return $this->hasOne(Emigrasi::class, 'IDMigrasi', 'IDMigrasi');
    }
}
