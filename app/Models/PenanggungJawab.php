<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenanggungJawab extends Model
{
    protected $table = 'PENANGGUNGJAWAB_KELUARGA';
    protected $primaryKey = 'IDPK';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'IDPK',
        'NoKK',
    ];

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'NoKK', 'NoKK');
    }

    public $timestamps = false;
}
