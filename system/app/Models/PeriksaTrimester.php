<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriksaTrimester extends Model
{
    use HasFactory;

    protected $table = 'periksa_trimester';

    protected $fillable = [
        'identitas_id',
        'nama_dokter',
        'tanggal_periksa',
        'konjungtiva',
        'sklera',
        'kulit',
        'leher',
        'gigi_mulut',
        'tht',
        'dada',
        'paru',
        'perut',
        'tungkai',
        'hpht',
        'keterangan_haid',
        'umur_kehamilan_hpht',
        'hpl_hpht',
        'umur_kehamilan_usg',
        'hpl_usg',
        'jumlah_gs',
        'diameter_gs',
        'umur_diameter_gs',
        'jumlah_bayi',
        'crl',
        'umur_crl',
        'letak_produk_kehamilan',
        'pulsasi_jantung',
        'temuan_abnormal',
        'temuan_abnormal_sebutkan', // Kolom tambahan jika temuan_abnormal = ya
        'hemoglobin',
        'golongan_darah',
        'rhesus',
        'gula_darah_sewaktu',
        'hasil_h',
        'hasil_s',
        'hasil_hepatitis_b',
        'skrining_kesehatan_jiwa',
        'tindak_lanjut_jiwa',
        'perlu_rujukan',
        'kesimpulan',
        'rekomendasi'
    ];

    /**
     * Relasi ke model Identitas.
     */
    public function identitas()
    {
        return $this->belongsTo(Identitas::class, 'identitas_id');
    }
}
