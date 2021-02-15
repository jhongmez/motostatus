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

    // Una moto pertenece a un usuario
    public function user() {
        return $this->belongsTo('App\User');
    }

    // Una moto pertenece a una marca
    public function brand() {
        return $this->belongsTo('App\Brand');
    }

    // Una moto pertenece a un soat
    public function soat() {
        return $this->belongsTo('App\Soat');
    }

    // Una moto pertenece a una llanta
    public function tire() {
        return $this->belongsTo('App\Tire');
    }

    // Una moto pertenece a un aceite
    public function oil() {
        return $this->belongsTo('App\Oil');
    }

    // Una moto pertenece a un tecnomecanico
    public function mechanic() {
        return $this->belongsTo('App\Mechanic');
    }

    // Una moto pertenece a unos frenos
    public function brake() {
        return $this->belongsTo('App\Brake');
    }
}
