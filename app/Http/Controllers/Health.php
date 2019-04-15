<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Image;

class Health extends Controller
{
    public function index() {

        return view('v_health_articles');

    }
}
