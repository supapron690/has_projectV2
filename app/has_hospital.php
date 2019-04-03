<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class has_hospital extends Model
{
    protected $table = 'has_hospital';
    protected $fillable = ['hos_name','hos_address','hos_phone','hos_coo_id'];
}
