<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinTuc;

class TinTucController extends FontendController
{
    public function getListTinTuc()
    {
    	$tintucs = TinTuc::paginate(10);

    	$sukien = TinTuc::where('tt_loaitin_id',14)->take(1)->get();

    	$xedap = TinTuc::where('tt_loaitin_id',15)->get();

    	$canhen = TinTuc::where('tt_loaitin_id',16)->get();

    	return view('tintuc',compact('tintucs','sukien','xedap','canhen'));
    }
}
