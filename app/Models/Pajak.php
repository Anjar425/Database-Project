<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pajak extends Model
{
    protected $table = 'PAJAK';
    protected $primaryKey = 'NPWP';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'NPWP', 'PajakPenghasilan', 'PBB','PajakKendaraan', 'JumlahPajak', 'IDPenghasilan','NoIDNasional',
    ];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'NoIDNasional', 'NoIDNasional');
    }
    
    public $timestamps = false;

    public function penghasilan()
    {
        return $this->belongsTo(Penghasilan::class, 'IDPenghasilan', 'IDPenghasilan');
    }
    
}
