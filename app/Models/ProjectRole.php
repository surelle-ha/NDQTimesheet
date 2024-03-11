<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_role_id',
        'project_role_name',
    ];

    protected $attributes = [
        'project_role_id' => '--',
        'project_role_name' => '--',
    ];
}
