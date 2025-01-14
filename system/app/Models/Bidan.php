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
        'fasyankes_id'
    ];

    static $rules = [
        'nama_bidan' => 'required',
        'nik' => 'required',
        'no_telpon' => 'required',
        'email' => 'required',
        'fasyankes_id' => 'required',
    ];
    static $message = [
        'nama_bidan.required' => 'Inputan tidak boleh kosong',
        'nik.required' => 'Inputan tidak boleh kosong',
        'no_telpon.required' => 'Inputan tidak boleh kosong',
        'email.required' => 'Inputan tidak boleh kosong',
        'fasyankes_id.required' => 'Inputan tidak boleh kosong',
    ];

    function bidan()
    {
        $this->belongsTo(Fasyankes::class);
    }
}
