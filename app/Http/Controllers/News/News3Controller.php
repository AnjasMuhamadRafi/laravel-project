<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class News3Controller extends Controller
{
    public function news3(){
        return view('News.news3');
    }
}
