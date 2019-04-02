<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class has_diseases_symptoms extends Model
{
    protected $table = 'has_diseases_symptoms';
    protected $fillable = ['ds_type','ds_name','ds_content','ds_Image'];
}
