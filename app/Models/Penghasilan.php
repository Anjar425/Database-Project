<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghasilan extends Model
{
    use HasFactory;
    protected $table = 'PENGHASILAN';
    protected $primaryKey = 'IDPenghasilan';
    public $timestamps = false;
    protected $keyType = 'string';

    protected $fillable = [
        'IDPenghasilan',
        'JumlahPenghasilan',
    ];

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'IDPenghasilan', 'IDPenghasilan');
    }

    public function pajak()
    {
        return $this->hasOne(Pajak::class, 'IDPenghasilan', 'IDPenghasilan');
    }
}
