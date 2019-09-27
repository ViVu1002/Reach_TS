<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinTuc;

class ArticleController extends FontendController
{
    public function getListArticle()
    {
    	$articles = TinTuc::paginate(10);

    	$bongda = TinTuc::where('tt_loaitin_id',17)->get();

    	$daihoc = TinTuc::where('tt_loaitin_id',18)->get();

    	$ngoaikhoa = TinTuc::where('tt_loaitin_id',19)->get();

    	return view('article',compact('articles','bongda','daihoc','ngoaikhoa'));
    }
}
