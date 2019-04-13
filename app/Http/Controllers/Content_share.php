<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Content_share extends Controller
{
    public function index() {

        return view('content\v_content_share');

    }
}
