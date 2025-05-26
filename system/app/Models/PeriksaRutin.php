<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriksaRutin extends Model
{
    use HasFactory;

    protected $table = 'periksa_rutin';

    protected $fillable = [
        'identitas_id',
        'tanggal_periksa',
        'berat_badan',
        'tinggi_badan',
        'lingkar_lengan',
        'tekanan_darah',
        'umur_kehamilan',
        'tfu',
        'djj',
        'gerakan_janin',
        'posisi_janin',
        'kaki_bengkak',
        'keluhan',
        'tindakan',
        'catatan',
    ];

    // Relasi ke tabel tb_identitas
    public function identitas()
    {
        return $this->belongsTo(Identitas::class, 'identitas_id');
    }
}
