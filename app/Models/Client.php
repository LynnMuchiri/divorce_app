<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Client extends Model
{
    
    use  HasApiTokens, HasFactory, Notifiable;
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guard = 'client';



    protected $table = 'clients';
    protected $primaryKey = 'id';
    protected $fillable = ['full_name', 
    'email',
    'phone_number',
    'password',
    'address', 
    'documents'];

    protected $hidden = [
        'password',
        'remember_token',
    ];



}
