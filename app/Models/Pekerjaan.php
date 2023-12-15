<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan  extends Model
{
    protected $table = 'PEKERJAAN';
    protected $primaryKey = 'IDPekerjaan';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'IDPekerjaan', 'LokasiPekerjaan', 'NamaPekerjaan', 'NoIDNasional',
    ];
    
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'NoIDNasional', 'NoIDNasional');
    }

    public function penghasilan()
    {
        return $this->hasOne(Penghasilan::class, 'IDPenghasilan', 'IDPenghasilan');
    }
}
