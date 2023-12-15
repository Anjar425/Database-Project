<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wna extends Model
{
    protected $table = 'WNA';
    protected $primaryKey = 'NoIDNasional';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'NoIDNasional', 'JenisVisa', 'NoIzinTinggal', 'Kewarganegaraan',
    ];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'NoIDNasional', 'NoIDNasional');
    }
    public $timestamps = false;
}
