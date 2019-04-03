<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class has_experience extends Model
{
    protected $table = 'has_experience';
    protected $fillable = ['exp_type','exp_name','exp_description','exp_mem_id','exp_date','exp_time'];
}
