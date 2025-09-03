<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class News1Controller extends Controller
{
    public function news1(){
        return view('News.news1');
    }
}
