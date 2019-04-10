<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class has_experiences extends Model
{
    protected $table = 'has_experiences';
    protected $fillable = ['exp_id','exp_type','exp_type_id','exp_name','exp_description','exp_mem_id','exp_date','exp_time'];
}
