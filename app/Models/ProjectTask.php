<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_task_id',
        'project_task_name',
    ];

    protected $attributes = [
        'project_task_id' => '--',
        'project_task_name' => '--',
    ];
}
