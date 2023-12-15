<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Swasta extends Model
{
    protected $table = 'Swasta';
    protected $primaryKey = 'IDPekerjaan';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    
    protected $fillable = [
        'IDPekerjaan',
        'NamaPerusahaan',
        'SJabatan',
        'Kontak',
    ];

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'IDPekerjaan', 'IDPekerjaan');
    }
}
