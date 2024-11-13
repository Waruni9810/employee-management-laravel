<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    protected $fillable = ['name', 'telephone', 'email', 'image', 'password'];

    
}