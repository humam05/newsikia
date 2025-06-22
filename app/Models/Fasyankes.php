<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fasyankes extends Model
{
    use HasFactory;

    protected $table = 'tb_fasyankes';

    protected $fillable = [
        'nama',
        'kecamatan',
        'kelurahan',
        'desa',
        'rt_rw',
    ];

    static $rules = [
        'nama' => 'required',
        'kecamatan' => 'required',
        'kelurahan' => 'required',
        'desa' => 'required',
        'rt_rw' => 'required',
    ];

    static $message = [
        'nama.required' => 'Inputan tidak boleh kosong',
        'kecamatan.required' => 'Inputan tidak boleh kosong',
        'kelurahan.required' => 'Inputan tidak boleh kosong',
        'desa.required' => 'Inputan tidak boleh kosong',
        'rt_rw.required' => 'Inputan tidak boleh kosong',
    ];

    /**
     * Relasi: 1 Fasyankes memiliki banyak Bidan
     */
    public function bidan()
    {
        return $this->hasMany(Bidan::class, 'fasyankes_id');
    }

    /**
     * Relasi: 1 Fasyankes memiliki banyak Posyandu
     */
    public function posyandu()
    {
        return $this->hasMany(Posyandu::class, 'fasyankes_id');
    }
}
