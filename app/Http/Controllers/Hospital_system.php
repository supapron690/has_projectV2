<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\has_hospitals;

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
}
