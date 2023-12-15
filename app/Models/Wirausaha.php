<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wirausaha extends Model
{
    use HasFactory;
    protected $table = 'Wiraswasta';
    protected $primaryKey = 'IDPekerjaan';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    
    protected $fillable = [
        'IDPekerjaan',
        'JenisUsaha',
    ];

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'IDPekerjaan', 'IDPekerjaan');
    }
}
