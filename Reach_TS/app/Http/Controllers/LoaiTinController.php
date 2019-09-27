<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\TinTuc;

class LoaiTinController extends FontendController
{
    public function getLoaiTin(Request $request)
    {
    	$laptrinhWeb = TinTuc::where('tt_loaitin_id',3)->take(1)->get();

    	return view('loaitin',compact('laptrinhWeb'));
    }
}
