<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoaiTin;
use App\Models\TinTuc;

class CategoryController extends FontendController
{
    public function getListLoaiTin(Request $request)
    {
    	$hoso = TinTuc::where('tt_loaitin_id',20)->get();
    	return view('loaitins.index',compact('hoso'));
    }
}
