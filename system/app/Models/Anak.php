<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    protected $table = 'tb_anak';

    protected $fillable = [
        'identitas_id',
        'anak_nama',
        'anak_nik',
        'anak_jkn',
        'anak_faskes_tk1',
        'anak_faskes_rujukan',
        'anak_tempat_lahir',
        'anak_tanggal_lahir',
        'anak_alamat',
        'anak_ke',
        'anak_akta_kelahiran',
        'anak_gol_darah',
    ];

    public function identitas()
    {
        return $this->belongsTo(Identitas::class, 'identitas_id');
    }

    public function periksaBayi()
{
    return $this->hasMany(PeriksaBayi::class);
}
}
