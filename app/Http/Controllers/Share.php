<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Share extends Controller
{
    public function index() {

        return view('v_share');

    }
}
