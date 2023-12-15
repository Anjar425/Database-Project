<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PNS extends Model
{
    protected $table = 'PNS';
    protected $primaryKey = 'IDPekerjaan';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    
    protected $fillable = [
        'IDPekerjaan',
        'NIP',
        'PJabatan',
        'NamaInstansi',
        'Kontak',
    ];

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'IDPekerjaan', 'IDPekerjaan');
    }
}
