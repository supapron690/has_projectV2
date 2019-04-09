<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class has_hospitals extends Model
{
    protected $table = 'has_hospitals';
    protected $fillable = ['hos_id'.'hos_name','hos_address','hos_phone','hos_province','hos_district','hos_web','hos_latitude','hos_longitude','hos_distance','hos_img','hos_coo_id'];
    protected $primaryKey = 'hos_id';
}

