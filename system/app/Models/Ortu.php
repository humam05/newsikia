<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ortu extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tb_ortu';
    protected $fillable = [
        'nama',
        'jk_ortu',
        'tmp_lahir_ortu',
        'tgl_lahir_ortu',
        'tlp',
        'alamat'
    ];

    static $rules = [
        'nama' => 'required',
        'jk_ortu' => 'required',
        'tmp_lahir_ortu' => 'required',
        'tgl_lahir_ortu' => 'required',
        'tlp' => 'required',
        'alamat' => 'required',
    ];
    static $message = [
        'nama.required' => 'Inputan tidak boleh kosong',
        'jk_ortu.required' => 'Inputan tidak boleh kosong',
        'tmp_lahir_ortu.required' => 'Inputan tidak boleh kosong',
        'tgl_lahir_ortu.required' => 'Inputan tidak boleh kosong',
        'tlp.required' => 'Inputan tidak boleh kosong',
        'alamat.required' => 'Inputan tidak boleh kosong',
    ];

    function bidan()
    {
        $this->belongsTo(Fasyankes::class);
    }
}
