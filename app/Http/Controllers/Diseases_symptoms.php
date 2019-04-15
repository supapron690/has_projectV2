<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\has_diseases_symptoms;
use Illuminate\Support\Facades\DB;
//use App\Http\Requests\DiseasesRequest;
use Image;
use File; 

class Diseases_symptoms extends Controller
{
    public function index() {
        $disea = has_diseases_symptoms::all(); //แสดงข้อมูลทั้งหมดในตาราง has_hospital
        return view('Diseases/v_diseases_sytem', [
            'diseas' => $disea
        ]);

    }

        // function add data
        public function form_diseases() {
            return view('Diseases/v_add_diseases');
        }


    public function store_diseases(Request $request) {
       
        // $data = $request->all();
       
        if($request->hasFile('ds_image')){
            $filename = str_random(10).'.'.$request->file('ds_image')->getClientOriginalExtension();
            $request->file('ds_image')->move(public_path() . '/images/', $filename);
            // Image::make(public_path() . '/images/' . $filename)->resize(50, 50)->save(public_path() . '/images/resize/' . $filename);
            $ds_image = $filename;  
        }

        DB::insert('insert into has_health_articles (ds_type, ds_name, ds_image, ds_content, ds_refer) values (?, ?, ?, ?, ?)',
        [$request->ds_type,
        $request->ds_name,
        $ds_image,
        $request->ds_content,
        $request->ds_refer,

        ]);

     
        return redirect('http://localhost:8000/diseases/');
   
    }



    //  ลบบทความ
    public function destroy($ds_id) {
        has_diseases_symptoms::destroy($ds_id);
        return back();
    }

    //แก้ไขข้อมูล
    // public function edit($ha_id) { 
    //     $health = has_health_articles::findOrFail($ha_id); 
    //     return view('health\edit_health', ['healths' => $health]);  
    // }
}  
