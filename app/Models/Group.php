<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'group_id',
        'group_name',
        'group_description',
        'group_status',
    ];

    protected $attributes = [
        'project_id' => '--',
        'group_id' => '--',
        'group_name' => '--',
        'group_description' => '--',
        'group_status' => 'Active',
    ];
}
