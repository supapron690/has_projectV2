<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\has_hospitals;


class Search_hospital extends Controller
{
    public function index() {


        return view('v_search_hospital');
        $hospital = has_hospitals::all(); //แสดงข้อมูลทั้งหมดในตาราง has_hospital
        $count = has_hospitals::count();
        return view('v_search_hospital', [
            'hospitals' => $hospital,
            'count' => $count
        ]);

    }
}

