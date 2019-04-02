<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class has_health_articles extends Model
{
    protected $table = 'has_health_articles';
    protected $fillable = ['ha_name','ha_content','ha_Image','ha_type'];
}
