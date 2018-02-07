<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class demoCtrl extends Controller
{
    public function index(Request $request){
    	$items = \App\Models\News::all();
    	dd($items->toArray());
    }
}
