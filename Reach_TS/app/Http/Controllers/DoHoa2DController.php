<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinTuc;

class DoHoa2DController extends FontendController
{
    public function getListDoHoa2D()
    {
    	$dohoa2s = TinTuc::where('tt_loaitin_id',4)->get();
    	return view('dohoa2d',compact('dohoa2s'));
    }
}
