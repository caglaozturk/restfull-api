<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $fillable = [
        'fullname', 'email', 'password','activation_key','is_active','is_admin'
    ];
    
    protected $hidden = [
        'password', 'activation_key',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
