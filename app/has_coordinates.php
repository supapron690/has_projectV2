<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class has_coordinates extends Model
{
    protected $table = 'has_coordinates';
    protected $fillable = ['coo_distance','coo_latitude','coo_longitude'];
}
