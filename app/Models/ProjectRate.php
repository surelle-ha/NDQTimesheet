<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRate extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'rate_id',
        'project_id',
        'description',
        'rate_amount',
        'rate_type',
        'is_aplr',
    ];

    protected $attributes = [
        'rate_id' => '--',
        'project_id' => '--',
        'description' => '--',
        'rate_amount' => '0',
        'rate_type' => 'Hourly',
        'is_aplr' => false,
    ];
}
