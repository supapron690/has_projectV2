<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class has_diseases_symptoms extends Model
{
    protected $table = 'has_diseases_symptoms';
    protected $fillable = ['ds_id,ds_type','ds_name','ds_content','ds_image,ds_refer'];
    protected $primaryKey = 'ds_id';
}
