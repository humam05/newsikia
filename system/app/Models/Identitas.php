<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Identitas extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tb_identitas';
    protected $fillable = [
        // Data Ibu
        'ibu_hamil_id',
        'ibu_nama',
        'ibu_nik',
        'ibu_jkn',
        'ibu_faskes_tk1',
        'ibu_faskes_rujukan',
        'ibu_ttl',
        'ibu_pendidikan',
        'ibu_pekerjaan',
        'ibu_gol_darah',
        'ibu_telepon',
        'ibu_alamat',
        'ibu_asuransi_lain',
        'ibu_asuransi_nomor',
        'ibu_asuransi_berlaku',

        // Data Suami
        'suami_nama',
        'suami_nik',
        'suami_jkn',
        'suami_faskes_tk1',
        'suami_faskes_rujukan',
        'suami_ttl',
        'suami_pendidikan',
        'suami_pekerjaan',
        'suami_gol_darah',
        'suami_telepon',
        'suami_alamat',
        'suami_asuransi_lain',
        'suami_asuransi_nomor',
        'suami_asuransi_berlaku',

        // Data Anak
        // 'anak_nama',
        // 'anak_nik',
        // 'anak_jkn',
        // 'anak_faskes_tk1',
        // 'anak_faskes_rujukan',
        // 'anak_tempat_lahir',
        // 'anak_tanggal_lahir',
        // 'anak_alamat',
        // 'anak_ke',
        // 'anak_akta_kelahiran',
        // 'anak_gol_darah',

        // Fasilitas Kesehatan
        'puskesmas',
        'kohort_ibu',
        'kohort_bayi',
        'kohort_balita',
        'medik_rs',
    ];

    static $rules = [
        'ibu_nama' => 'required|string|max:255',
        'ibu_nik' => 'required|numeric|digits:16',
        'ibu_jkn' => 'string|max:50',
        'ibu_faskes_tk1' => 'string|max:255',
        'ibu_faskes_rujukan' => 'string|max:255',
        'ibu_ttl' => 'string|max:255',
        'ibu_pendidikan' => 'string|max:255',
        'ibu_pekerjaan' => 'string|max:255',
        'ibu_gol_darah' => 'string|max:3',
        'ibu_telepon' => 'string|max:15',
        'ibu_alamat' => 'string|max:500',
        'ibu_asuransi_lain' => 'string|max:255',
        'ibu_asuransi_nomor' => 'string|max:255',
        'ibu_asuransi_berlaku' => 'date',

        'suami_nama' => 'required|string|max:255',
        'suami_nik' => 'required|numeric|digits:16',
        'suami_jkn' => 'string|max:50',
        'suami_faskes_tk1' => 'string|max:255',
        'suami_faskes_rujukan' => 'string|max:255',
        'suami_ttl' => 'string|max:255',
        'suami_pendidikan' => 'string|max:255',
        'suami_pekerjaan' => 'string|max:255',
        'suami_gol_darah' => 'string|max:3',
        'suami_telepon' => 'string|max:15',
        'suami_alamat' => 'string|max:500',
        'suami_asuransi_lain' => 'string|max:255',
        'suami_asuransi_nomor' => 'string|max:255',
        'suami_asuransi_berlaku' => 'date',

        'anak_nama' => 'string|max:255',
        'anak_nik' => 'numeric|digits:16',
        'anak_jkn' => 'string|max:50',
        'anak_faskes_tk1' => 'string|max:255',
        'anak_faskes_rujukan' => 'string|max:255',
        'anak_tempat_lahir' => 'string|max:255',
        'anak_tanggal_lahir' => 'date',
        'anak_alamat' => 'string|max:500',
        'anak_ke' => 'integer',
        'anak_akta_kelahiran' => 'string|max:255',
        'anak_gol_darah' => 'string|max:3',

        'puskesmas' => 'string|max:255',
        'kohort_ibu' => 'string|max:255',
        'kohort_bayi' => 'string|max:255',
        'kohort_balita' => 'string|max:255',
        'medik_rs' => 'string|max:255',
    ];

    static $messages = [
        // Data Ibu
        'ibu_nama.required' => 'Nama ibu tidak boleh kosong',
        'ibu_nik.required' => 'NIK ibu tidak boleh kosong',
        // 'ibu_jkn.required' => 'Nomor JKN ibu tidak boleh kosong',
        // 'ibu_faskes_tk1.required' => 'Faskes TK1 ibu tidak boleh kosong',
        // 'ibu_faskes_rujukan.required' => 'Faskes rujukan ibu tidak boleh kosong',
        // 'ibu_ttl.required' => 'Tempat/Tanggal Lahir ibu tidak boleh kosong',
        // 'ibu_pendidikan.required' => 'Pendidikan ibu tidak boleh kosong',
        // 'ibu_pekerjaan.required' => 'Pekerjaan ibu tidak boleh kosong',
        // 'ibu_gol_darah.required' => 'Golongan darah ibu tidak boleh kosong',
        // 'ibu_telepon.required' => 'Nomor telepon ibu tidak boleh kosong',
        // 'ibu_alamat.required' => 'Alamat ibu tidak boleh kosong',
        // 'ibu_asuransi_lain.required' => 'Asuransi lain ibu tidak boleh kosong',
        // 'ibu_asuransi_nomor.required' => 'Nomor asuransi ibu tidak boleh kosong',
        // 'ibu_asuransi_berlaku.required' => 'Tanggal berlaku asuransi ibu tidak boleh kosong',

        // Data Suami/Keluarga
        'suami_nama.required' => 'Nama suami tidak boleh kosong',
        'suami_nik.required' => 'NIK suami tidak boleh kosong',
        // 'suami_jkn.required' => 'Nomor JKN suami tidak boleh kosong',
        // 'suami_faskes_tk1.required' => 'Faskes TK1 suami tidak boleh kosong',
        // 'suami_faskes_rujukan.required' => 'Faskes rujukan suami tidak boleh kosong',
        // 'suami_ttl.required' => 'Tempat/Tanggal Lahir suami tidak boleh kosong',
        // 'suami_pendidikan.required' => 'Pendidikan suami tidak boleh kosong',
        // 'suami_pekerjaan.required' => 'Pekerjaan suami tidak boleh kosong',
        // 'suami_gol_darah.required' => 'Golongan darah suami tidak boleh kosong',
        // 'suami_telepon.required' => 'Nomor telepon suami tidak boleh kosong',
        // 'suami_alamat.required' => 'Alamat suami tidak boleh kosong',
        // 'suami_asuransi_lain.required' => 'Asuransi lain suami tidak boleh kosong',
        // 'suami_asuransi_nomor.required' => 'Nomor asuransi suami tidak boleh kosong',
        // 'suami_asuransi_berlaku.required' => 'Tanggal berlaku asuransi suami tidak boleh kosong',

        // Data Anak
        // 'anak_nama.required' => 'Nama anak tidak boleh kosong',
        // 'anak_nik.required' => 'NIK anak tidak boleh kosong',
        // 'anak_jkn.required' => 'Nomor JKN anak tidak boleh kosong',
        // 'anak_faskes_tk1.required' => 'Faskes TK1 anak tidak boleh kosong',
        // 'anak_faskes_rujukan.required' => 'Faskes rujukan anak tidak boleh kosong',
        // 'anak_tempat_lahir.required' => 'Tempat lahir anak tidak boleh kosong',
        // 'anak_tanggal_lahir.required' => 'Tanggal lahir anak tidak boleh kosong',
        // 'anak_alamat.required' => 'Alamat anak tidak boleh kosong',
        // 'anak_ke.required' => 'Urutan anak tidak boleh kosong',
        // 'anak_akta_kelahiran.required' => 'Nomor akta kelahiran anak tidak boleh kosong',
        // 'anak_gol_darah.required' => 'Golongan darah anak tidak boleh kosong',

        // Fasilitas Kesehatan
        // 'puskesmas.required' => 'Puskesmas domisili tidak boleh kosong',
        // 'kohort_ibu.required' => 'Nomor reg. Kohort ibu tidak boleh kosong',
        // 'kohort_bayi.required' => 'Nomor reg. Kohort bayi tidak boleh kosong',
        // 'kohort_balita.required' => 'Nomor reg. Kohort balita tidak boleh kosong',
        // 'medik_rs.required' => 'Nomor catatan medik RS tidak boleh kosong',
    ];
    public function ibuHamil()
    {
        return $this->belongsTo(IbuHamil::class, 'ibu_hamil_id');
    }

    // public function identitas()
    // {
    //     return $this->hasOne(Identitas::class, 'ibu_hamil_id');
    // }

    public function periksaRutin()
    {
        return $this->hasMany(\App\Models\PeriksaRutin::class, 'identitas_id');
    }

    public function anak()
    {
        return $this->hasMany(periksaBayi::class, 'identitas_id'); // Pastikan 'identitas_id' adalah kolom yang sesuai
    }

    public function anak2()
    {
        return $this->hasMany(Anak::class, 'identitas_id');
    }
}
