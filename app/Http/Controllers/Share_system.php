<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\has_experiences;
use Illuminate\Support\Facades\DB;
use Image;

class Share_system extends Controller
{
    public function index() {
        $share = has_experiences::all(); //แสดงข้อมูลทั้งหมดในตาราง has_hospital
        $count = has_experiences::count();
        return view('v_share_system', [
            'shares' => $share,
            'count' => $count
        ]);

    }

        // function add data
        // public function form_health() {
        //     return view('v_share_system');
        // }
}
