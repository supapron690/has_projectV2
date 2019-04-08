<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Master_system extends Controller
{
    public function index() {
        return view('v_master_system');
    }
}
