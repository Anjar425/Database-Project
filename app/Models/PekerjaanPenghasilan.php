<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PekerjaanPenghasilan extends Model
{
    protected $table = 'PEKERJAAN_MENDAPATKAN_PENGHASILAN';
    public $timestamps = false;
    protected $keyType = 'string';

    protected $fillable = [
        'IDPekerjaan',
        'IDPenghasilan',
        'NamaPekerjaan',
        'LokasiPekerjaan',
        'JumlahPenghasilan',
    ];

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'IDPekerjaan', 'IDPekerjaan');
    }

    public function penghasilan()
    {
        return $this->belongsTo(Penghasilan::class, 'IDPenghasilan', 'IDPenghasilan');
    }
}
