<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'project_id',
        'project_name',
        'project_description',
        'project_status',
    ];

    protected $attributes = [
        'project_id' => '--',
        'project_id' => '--',
        'project_name' => '--',
        'project_description' => '--',
        'project_status' => 'Active',
    ];
}
