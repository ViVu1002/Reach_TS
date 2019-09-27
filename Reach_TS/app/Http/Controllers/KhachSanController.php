<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinTuc;

class KhachSanController extends FontendController
{
    public function getListKhachSan()
    {
    	$khachsans = TinTuc::where('tt_loaitin_id',9)->get();

    	return view('khachsan',compact('khachsans'));
    }
}
