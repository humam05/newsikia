<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posyandu extends Model
{
    protected $table = 'tb_posyandu';

    protected $fillable = [
        'fasyankes_id',
        'nama_posyandu',
        'tanggal',
        'waktu',
        'lokasi',
        'foto',
    ];

    static $rules = [
        'fasyankes_id' => 'required',
        'nama_posyandu' => 'required',
        'tanggal' => 'required',
        'waktu' => 'required',
        'lokasi' => 'required',
        'foto' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
    ];

    static $message = [
        'fasyankes_id.required' => 'Inputan tidak boleh kosong',
        'nama_posyandu.required' => 'Inputan tidak boleh kosong',
        'tanggal.required' => 'Inputan tidak boleh kosong',
        'waktu.required' => 'Inputan tidak boleh kosong',
        'lokasi.required' => 'Inputan tidak boleh kosong',
        'foto.image' => 'File harus berupa gambar',
        'foto.mimes' => 'File harus berupa jpeg, png, jpg, atau gif',
        'foto.max' => 'Ukuran file tidak boleh lebih dari 2MB',
    ];

    /**
     * Relasi: Posyandu dimiliki oleh 1 Fasyankes
     */
    public function fasyankes()
    {
        return $this->belongsTo(Fasyankes::class, 'fasyankes_id');
    }
}
