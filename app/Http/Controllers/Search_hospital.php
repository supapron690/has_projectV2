<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Search_hospital extends Controller
{
    public function index() {

        return view('v_search_hospital');

    }
}

