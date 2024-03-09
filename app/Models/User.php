<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'internal_id',
        'external_id',
        'first_name',
        'last_name',

        'birthday',
        'gender',

        'position',

        'description',
        'address_1',
        'address_2',
        'city',
        'zipcode',
        'country',
        
        'contact_number',
        'emergency_number',
        'email',
        'password',
        'role',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Default attribute values
    protected $attributes = [
        'internal_id' => 'No iID',
        'external_id' => 'No eID',
        'first_name' => '--',
        'last_name' => '--',
        'birthday' => '--',
        'gender' => 'N/A',

        'position' => 'Employee',
        'description' => 'N/A',
        'address_1' => '--',
        'address_2' => '--',
        'city' => 'Taguig',
        'zipcode' => '--',
        'country' => 'Philippines',

        'contact_number' => '--',
        'emergency_number' => '--',
        'email' => '--',
        'password' => '--',
        'role' => 'Employee',
        'status' => 'Active',
    ];

}
