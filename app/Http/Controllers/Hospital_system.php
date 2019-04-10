<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\has_hospitals;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HospitalRequest;
use Image;

class Hospital_system extends Controller
{
    public function index() {
        $hospital = has_hospitals::all(); //แสดงข้อมูลทั้งหมดในตาราง has_hospital
        $count = has_hospitals::count();
        // return View::make("search_hospital")->with (array('hospitals' =>$hospital));
        return view('v_hospital_system', [
            'hospitals' => $hospital,
            'count' => $count
        ]);
    }
    // Function ลบข้อมูลโรงพยาบาล 
    public function destroy($hos_id) {
        has_hospitals::destroy($hos_id);
        return back();
    }

    // function add data
    public function form_hospital() {

        $data = DB::select("SELECT * FROM provinces WHERE geography_id = ?", [5]);

        //var_dump($data);

        return view('v_add_hospital', $data);
    }

    // function add data
    public function get_amphur($id) {

        //$data = DB::select("SELECT * FROM amphures WHERE province_id = ?", [$id]);

        //return json_encode($data);
        return 1;
    }

    public function store(Request\HospitalRequest $request) {
        echo $request->hos_name;

        if($request->hasFile('hos_img')){
            $filename = str_random(10).'.'.$request->file('hos_img')->getClientOriginalExtension();
            $request->file('hos_img')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename)->resize(50, 50)->save(public_path() . '/images/resize/' . $filename);
            $hos_img = $filename;  
        } else {
            $hos_img = 'logo2.png';
        }

        DB::insert('insert into has_hospitals (hos_name, hos_province, hos_district, hos_address, hos_latitude, hos_longitude, hos_img) values (?, ?, ?, ?, ?, ?, ?)',
        [$request->hos_name,
        $request->hos_province,
        $request->hos_district,
        $request->hos_address,
        $request->hos_latitude,
        $request->hos_longitude,
        $hos_img]);

       return redirect('http://localhost:8000/hospital/');
    }
}
