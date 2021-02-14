<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nameMotorcycle',
        'cc',
        'model',
        'soatDate',
        'taxes',
        'taxesDate',
        'mechanicsDate',
        'tiresDate',
        'brakesDate',
        'oilsDate',
        'user_id',
        'brand_id',
        'soat_id',
        'mechanic_id',
        'tire_id',
        'brake_id',
        'oil_id',
    ];

}
