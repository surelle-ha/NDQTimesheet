<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    protected $fillable = [
        'client_id',
        'client_name',
        'client_description',
        'client_sector',
        'client_phone',
        'client_address_1',
        'client_address_2',
        'client_city',
        'client_region',
        'client_zipcode',
        'client_country',
        'client_status',
    ];

    protected $attributes = [
        'client_id' => 'No ID',
        'client_name' => '--',
        'client_description' => '--',
        'client_sector' => '--',
        'client_phone' => '--',
        'client_address_1' => '--',
        'client_address_2' => '--',
        'client_city' => '--',
        'client_region' => '--',
        'client_zipcode' => '--',
        'client_country' => '--',
        'client_status' => '--',
    ];
}
