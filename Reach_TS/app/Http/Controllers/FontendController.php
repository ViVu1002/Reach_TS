<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use App\Models\Slide;

class FontendController extends Controller
{
    public function __construct()
    {
    	$categories = Category::all();
    	$slide = Slide::all();
    	$viewData = [
    		'slide' => $slide,
    		'categories' =>$categories,
    	];
    	View::share($viewData);
    } 
}
