<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;


class has_hospitals extends Model
{
    protected $table = 'has_hospitals';
    protected $fillable = ['hos_id'.'hos_name','hos_address','hos_phone','hos_province','hos_district','hos_web','hos_latitude','hos_longitude','hos_distance','hos_img','hos_description'];
    protected $primaryKey = 'hos_id';

    public static function get_province(){
        $data = DB::select("SELECT * FROM provinces WHERE geography_id = ?", [5]);

        $collection = collect($data);

        return $collection;
    }

 

}