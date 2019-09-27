<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinTuc;

class PhaCheController extends FontendController
{
    public function getListPhaChe()
    {
    	$banbar = TinTuc::where('tt_loaitin_id',6)->get();
    	return view('phache',compact('banbar'));
    }
}
