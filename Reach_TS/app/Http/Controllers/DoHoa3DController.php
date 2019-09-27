<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinTuc;

class DoHoa3DController extends FontendController
{
    public function getListDoHoa3D()
    {
    	$dohoa3d = TinTuc::where('tt_loaitin_id',5)->get();
    	return view('dohoa3d',compact('dohoa3d'));
    }
}
