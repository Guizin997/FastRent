<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'car_model',
        'car_odometer',
        'car_fabrication_year',
        'car_fabricator',
        'car_category',
        'car_rental_value',
    ];
}
