<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Introduce;
use App\Models\Category;
use App\Models\TinTuc;


class IntroduceController extends FontendController
{
    public function getListIntroduce(Request $request)
    {
    	$introduces = Introduce::paginate(10);

    	return view('introduce',compact('introduces'));
    }
}
