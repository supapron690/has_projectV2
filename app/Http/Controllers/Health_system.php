<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\has_health_articles;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HealthRequest;
use Image;

class Health_system extends Controller
{
    public function index() {
        $health = has_health_articles::all(); //แสดงข้อมูลทั้งหมดในตาราง has_hospital
        $count = has_health_articles::count();
        return view('v_health_system', [
            'healths' => $health,
            'count' => $count
        ]);

    }

        // function add data
        public function form_health() {
            return view('v_add_health_system');
        }


    public function store_health(Request $request) {
       
        $data = $request->all();
        $newdata = has_health_articles::create($data);
        
        // echo $request->ha_name;

    //     if($request->hasFile('ha_image')){
    //         $filename = str_random(10).'.'.$request->file('ha_image')->getClientOriginalExtension();
    //         $request->file('ha_image')->move(public_path() . '/images/', $filename);
    //         Image::make(public_path() . '/images/' . $filename)->resize(50, 50)->save(public_path() . '/images/resize/' . $filename);
    //         $ha_image = $filename;  
    //     } 

    //     DB::insert('insert into has_health_articles (ha_name, ha_content, ha_image, ha_type, ha_type_id, ha_refer) values ( ?, ?, ?, ?, ?, ?)',
    //     [$request->ha_name,
    //     $request->ha_content,
    //     $request->ha_image,
    //     $request->ha_type,
    //     $request->ha_type_id,
    //     $request->ha_refer]);

        return redirect('http://localhost:8000/health/');
        // return $newdata;
    }

}