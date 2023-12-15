<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bantuan extends Model
{
    protected $table = 'BANTUAN';
    protected $primaryKey = 'IDBantuan';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'IDBantuan', 'JenisBantuan', 'Syarat',
    ];

    public function penduduk()
    {
        return $this->belongsToMany(Penduduk::class, 'MENERIMA', 'IDBantuan', 'NoIDNasional');
    }
    public $timestamps = false;
}
