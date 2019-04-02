<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Articles_forhealth extends Controller
{
    public function index() {

        return view('v_articles_forhealth');

    }
}
