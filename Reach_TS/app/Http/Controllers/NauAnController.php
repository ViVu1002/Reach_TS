<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinTuc;

class NauAnController extends FontendController
{
    public function getListNauAn()
    {
    	$chebien = TinTuc::where('tt_loaitin_id',10)->get();
    	return view('nauan',compact('chebien'));
    }
}
