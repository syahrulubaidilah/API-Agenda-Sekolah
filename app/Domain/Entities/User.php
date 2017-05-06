<?php

namespace App\Domain\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Entities implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
    
    protected $fillable = [
    'name', 'email', 'password', 'level', 'position',
    ];
    
    protected $primaryKey = 'id';
    
    protected $hidden = [
    'password', 'remember_token',
    ];
}