<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\has_diseases_symptoms;
use Illuminate\Support\Facades\DB;
use Image;

class Search_disease extends Controller
{
    public function index() {
        $disease = has_diseases_symptoms::all(); //แสดงข้อมูลทั้งหมดในตาราง has_hospital
        return view('v_search_disease', [
            'diseases' => $disease
        ]);
      
    }
}
