<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emigrasi extends Model
{
    use HasFactory;
    protected $table = 'EMIGRASI';
    protected $primaryKey = 'IDMigrasi';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = ['IDMigrasi', 'ENegaraTujuan', 'ENoPaspor' ];
    
    public function migrasi()
    {
        return $this->belongsTo(Migrasi::class, 'IDMigrasi', 'IDMigrasi');
    }
}
