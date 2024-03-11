<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAppRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_app_role_title',
        'user_app_role_description',
        'user_app_role_access',
    ];

    protected $attributes = [
        'user_app_role_title' => '--',
        'user_app_role_description' => '--',
        'user_app_role_access' => '--'
    ];
}
