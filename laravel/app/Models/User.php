<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public const CREATED_AT = 'createdAt';
    public const UPDATED_AT = 'updatedAt';

    protected $hidden = ['password'];
    protected $fillable = [
        'id',
        'email',
        'name',
        'password',
        'createdAt',
        'updatedAt',
    ];

    public function setPasswordAttribute(String $password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function setEmailAttribute(String $email)
    {
        $this->attributes['email'] = trim(strtolower($email));
    }
}
