<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriksaBayi extends Model
{
    use HasFactory;

    protected $table = 'tb_pemeriksaan_balita';

    protected $fillable = [
        'anak_id',
        'tanggal_pemeriksaan',
        'umur_bulan',
        'berat_badan',
        'tinggi_badan',
        'lingkar_kepala',
        'lingkar_lengan',
        'imunisasi',
        'vitamin_a',
    ];


    public function anak()
    {
        return $this->belongsTo(Anak::class);
    }
}
