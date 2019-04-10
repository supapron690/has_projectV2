<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class has_health_articles extends Model
{
    protected $table = 'has_health_articles';
    protected $fillable = ['ha_id','ha_name','ha_content','ha_image','ha_type','ha_type_id','ha_refer'];
    protected $primaryKey = 'ha_id';
}
