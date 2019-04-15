<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Content_all extends Controller
{
    public function index() {

        return view('content\v_content_all');

    }
}
