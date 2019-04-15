<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\has_health_articles;
use App\has_diseases_symptoms;
use App\has_hospitals;
use Illuminate\Support\Facades\DB;
use Image;


class Main extends Controller
{
    public function index() {
        $health = has_health_articles::all(); //แสดงข้อมูลทั้งหมดในตาราง has_hospital
        $disease = has_diseases_symptoms::all();
        $hospital = has_hospitals::all();
        return view('v_main', [
            'diseases' => $disease,
            'healths' => $health,
            'hospitals' => $hospital
        ]);

    }
}
