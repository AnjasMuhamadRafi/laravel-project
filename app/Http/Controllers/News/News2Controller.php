<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class News2Controller extends Controller
{
    public function news2(){
        return view('News.news2');
    }
}
