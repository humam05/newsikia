<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;


class Bayi extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tb_bayi';
    protected $fillable = [
        'nama_lengkap',
        'jk_bayi',
        'tmp_lahir_bayi',
        'tgl_lahir_bayi',
        'ortu_id'
    ];

    static $rules = [
        'nama_lengkap' => 'required',
        'jk_bayi' => 'required',
        'tmp_lahir_bayi' => 'required',
        'tgl_lahir_bayi' => 'required',
        'ortu_id' => 'required',
    ];
    static $message = [
        'nama_lengkap.required' => 'Inputan tidak boleh kosong',
        'jk_bayi.required' => 'Inputan tidak boleh kosong',
        'tmp_lahir_bayi.required' => 'Inputan tidak boleh kosong',
        'tgl_lahir_bayi.required' => 'Inputan tidak boleh kosong',
        'ortu_id.required' => 'Inputan tidak boleh kosong',
    ];

    function bayi()
    {
        $this->belongsTo(Bayi::class);
    }
}
