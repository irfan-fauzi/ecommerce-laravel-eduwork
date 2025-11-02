<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // ← ini penting
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    //
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'img',
    ];

    // relasi
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
