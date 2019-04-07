<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
=======
use App\has_hospitals;
>>>>>>> 65d9d0ed7e9a28ae57f7451e932c37659eba6308

class Search_hospital extends Controller
{
    public function index() {
<<<<<<< HEAD

        return view('v_search_hospital');

=======
        $hospital = has_hospitals::all(); //แสดงข้อมูลทั้งหมดในตาราง has_hospital
        $count = has_hospitals::count();
        // return View::make("search_hospital")->with (array('hospitals' =>$hospital));
        return view('v_search_hospital', [
            'hospitals' => $hospital,
            'count' => $count
        ]);
>>>>>>> 65d9d0ed7e9a28ae57f7451e932c37659eba6308
    }
}

