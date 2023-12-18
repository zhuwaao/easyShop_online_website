<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Attributes that can be mass assigned
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'phone_number',
        'address',
        'id_number',
        'id_picture',
    ];

    // Attributes that should be hidden for arrays
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Define the one-to-many relationship with products
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Get the identifier that will be stored in the subject claim of the JWT
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    // Return a key value array, containing any custom claims to be added to the JWT
    public function getJWTCustomClaims()
    {
        return [];
    }
}