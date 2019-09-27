<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinTuc;

class LamTocController extends FontendController
{
    public function getListLamToc()
    {
    	$toc = TinTuc::where('tt_loaitin_id',8)->get();
    	return view('lamtoc',compact('toc'));
    }
}
