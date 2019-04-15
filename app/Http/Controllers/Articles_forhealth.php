<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\has_health_articles;
use Illuminate\Support\Facades\DB;
use Image;

class Articles_forhealth extends Controller
{
    public function index() {

        $health = has_health_articles::all(); //แสดงข้อมูลทั้งหมดในตาราง has_hospital
        return view('v_articles_forhealth', [
            'healths' => $health,
        ]);

    }
}
