<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempatTinggal extends Model
{
    use HasFactory;
    protected $table = 'TEMPAT_TINGGAL';
    protected $primaryKey = 'NoDaerah';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    
    protected $fillable = [
        'NoDaerah',
        'NamaDaerah',
        'Kecamatan',
        'Kabupaten',
        'Provinsi',
    ];
    public function keluarga()
    {
        return $this->hasOne(KeluargaTempatTinggal::class, 'NoDaerah', 'NoDaerah');
    }
}
