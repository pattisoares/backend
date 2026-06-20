<?php

namespace App\Models;

// IMPORTANTE: esse import precisa existir
use App\Models\Recado;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Campos que podem ser preenchidos
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Relacionamento:
     * Um usuário tem vários recados
     */
    public function recados()
    {
        return $this->hasMany(Recado::class);
    }

    /**
     * Campos escondidos no JSON
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
