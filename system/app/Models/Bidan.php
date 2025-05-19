<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;


class Bidan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tb_bidan';
    protected $fillable = [
        'nama_bidan',
        'nik',
        'no_telpon',
        'email',
        'fasyankes_id',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat_lengkap',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa',
    ];

    static $rules = [
        'nama_bidan' => 'required',
        'nik' => 'required',
        'no_telpon' => 'required',
        'email' => 'required',
        'fasyankes_id' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required|date',
        'alamat_lengkap' => 'required',
        'provinsi' => 'required',
        'kabupaten' => 'required',
        'kecamatan' => 'required',
        'desa' => 'required',
    ];

    static $message = [
        'nama_bidan.required' => 'Inputan tidak boleh kosong',
        'nik.required' => 'Inputan tidak boleh kosong',
        'no_telpon.required' => 'Inputan tidak boleh kosong',
        'email.required' => 'Inputan tidak boleh kosong',
        'nama_fasyankes.required' => 'Inputan tidak boleh kosong',
        'tempat_lahir.required' => 'Inputan tidak boleh kosong',
        'tanggal_lahir.required' => 'Inputan tidak boleh kosong',
        'tanggal_lahir.date' => 'Format tanggal lahir tidak valid',
        'alamat_lengkap.required' => 'Inputan tidak boleh kosong',
        'provinsi.required' => 'Inputan tidak boleh kosong',
        'kabupaten.required' => 'Inputan tidak boleh kosong',
        'kecamatan.required' => 'Inputan tidak boleh kosong',
        'desa.required' => 'Inputan tidak boleh kosong',
    ];



    function fasyankes()
    {
        return $this->belongsTo(Fasyankes::class);
    }
}
