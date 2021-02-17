<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oil extends Model
{
    public $table = "oils";
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
