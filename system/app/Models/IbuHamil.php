<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class IbuHamil extends Authenticatable
{
    use Notifiable;

    protected $guard = 'ibuhamil';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function identitas()
    {
        return $this->hasOne(Identitas::class, 'ibu_hamil_id');
    }
}
