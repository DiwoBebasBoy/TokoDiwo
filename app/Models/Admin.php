<?php

namespace App\Models;

Use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name', 'username', 'email', 'password'
    ];
}
