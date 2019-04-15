<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Content_article extends Controller
{
    public function index() {

        return view('content\v_content_article');

    }
}
