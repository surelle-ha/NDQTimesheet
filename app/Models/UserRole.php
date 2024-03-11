<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_role_title',
        'user_role_description',
    ];

    protected $attributes = [
        'user_role_title' => '--',
        'user_role_description' => '--',
    ];
}
