<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinTuc;

class MarketingController extends FontendController
{
    public function getListMarketing()
    {
    	$banhang = TinTuc::where('tt_loaitin_id',7)->get();
    	return view('marketing',compact('banhang'));
    }
}
