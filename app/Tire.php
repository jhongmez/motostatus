<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tire extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'activo',
    ];

    public function motorcycles() {
        return $this->hasMany('App\Motorcycle');
    }
}
