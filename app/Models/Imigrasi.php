<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imigrasi extends Model   
{
    use HasFactory;
    protected $table = 'IMIGRASI';
    protected $primaryKey = 'IDMigrasi';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = ['IDMigrasi', 'INegaraTujuan', 'INegaraAsal', 'INoPaspor' ];

    public function migrasi()
    {
        return $this->belongsTo(Migrasi::class, 'IDMigrasi', 'IDMigrasi');
    }
}
 