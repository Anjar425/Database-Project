<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaSosial extends Model
{
    use HasFactory;

    protected $table = 'MEDIA_SOSIAL';

    protected $primaryKey = 'UserID';

    public $incrementing = false;

    protected $fillable = [
        'UserID',
        'Username',
        'JenisMedsos',
        'LamaPenggunaan',
        'NoIDNasional',
    ];

    // Tambahan jika Anda ingin menggunakan timestamp (created_at, updated_at)
    public $timestamps = false;
    
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'NoIDNasional', 'NoIDNasional');
    }
}
