<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'PENDUDUK';
    protected $primaryKey = 'NoIDNasional';
    public $timestamps = false;
    protected $keyType = 'string';

    // Fillable fields if needed
    protected $fillable = [
        'NoIDNasional',
        'Nama',
        'Status',
        'GolDarah',
        'JenisKelamin',
        'Usia',
        'Agama',
        'Kecamatan',
        'Kabupaten',
        'Provinsi',
        'TanggalLahir',
        'BulanLahir',
        'TahunLahir',
        'TempatLahir',
        'NoKK',
    ];

    // Relationships if needed
    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'NoKK', 'NoKK');
    }

    public function pekerjaan()
    {
        return $this->hasOne(Pekerjaan::class, 'NoIDNasional', 'NoIDNasional');
    }

    public function mediaSosial()
    {
        return $this->hasOne(MediaSosial::class, 'NoIDNasional', 'NoIDNasional');
    }

    public function pendidikan()
    {
        return $this->hasOne(Pendidikan::class, 'NoIDNasional', 'NoIDNasional');
    }

    public function migrasi()
    {
        return $this->hasOne(Migrasi::class, 'NoIDNasional', 'NoIDNasional');
    }

    public function riwayatPenyakit()
    {
        return $this->belongsToMany(RiwayatPenyakit::class, 'mempunyai', 'NoIDNasional', 'IDPenyakit');
    }

    public function bantuan()
    {
        return $this->belongsToMany(Bantuan::class, 'menerima', 'NoIDNasional', 'IDBantuan');
    }
}
