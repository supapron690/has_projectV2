<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Image;

class Share_exper extends Controller
{
    public function index() {

        return view('v_share_exper');

    }
}
