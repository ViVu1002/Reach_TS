<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Category;
use App\Models\TinTuc;



class HomeController extends FontendController
{
    public function index(Request $request)
    {

        $lienhe = TinTuc::where('tt_loaitin_id',13)->get();

        $tintucHoc = TinTuc::where('tt_category_id',5)->take(3)->get();

        $tintucNews = TinTuc::where('tt_category_id',4)->take(4)->get();

        $tintucNganh = TinTuc::where('tt_category_id',7)->take(2)->get();

        $reach = TinTuc::where('tt_loaitin_id',3)->get();
        
        return view('home.index',compact('tintucHoc','tintucNews','tintucNganh','lienhe','reach'));
    }
}
