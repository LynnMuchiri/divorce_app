<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Lawyer extends Model
{
    use  HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guard = 'lawyer';
    
    protected $table = 'lawyers';
    protected $primaryKey = 'id';
    protected $fillable = ['full_name', 
    'profile_photo',
    'email',
    'address',
    'password',
    'specialization',	
    'experience',
    'license',
    'phone_number'];

protected $hidden = [
    'password',
    'remember_token',
];
}