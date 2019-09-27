<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinTuc;

class VideoController extends FontendController
{
    public function getListVideo()
    {
    	$chinhsua = TinTuc::where('tt_loaitin_id',11)->get();
    	return view('video',compact('chinhsua'));
    }
}
