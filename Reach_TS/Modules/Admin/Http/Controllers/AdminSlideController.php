<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestSlide;
use App\Models\Slide;
use Str;

class AdminSlideController extends Controller
{
    public function index()
    {
        $slides = Slide::paginate(10);

        $viewData = [
            'slides' => $slides 
        ];

        return view('admin::slide.index',$viewData);
    }

    public function create()
    {
         return view('admin::slide.create');
    }

    public function store(RequestSlide $requestSlide)
    {
        $this->insertOrUpdate($requestSlide);
        return redirect()->back();
    }

    public function edit($id)
    {
        $slide = Slide::find($id);
        return view('admin::slide.update',compact('slide'));
    }

    public function update(RequestSlide $requestSlide,$id)
    {
        $this->insertOrUpdate($requestSlide,$id);
        return redirect()->back();
    }

    public function insertOrUpdate($requestSlide,$id='')
    {
        $slide = new Slide();

        if($id) $slide = Slide::find($id);

        $slide->s_name = $requestSlide->s_name;
        $slide->s_slug = Str::slug($requestSlide->s_name);

        if($requestSlide->hasFile('s_avatar'))
        {
            $file = $requestSlide->file('s_avatar');

            $name = $file->getClientOriginalName();
            $image = Str::random(4)."_". $name;
            while (file_exists("upload/slide/".$image))
            {
                 $image = Str::random(4)."_". $name;
            }
            $file->move("upload/slide",$image);
            $slide->s_avatar = $image;
        }
        else
        {
            $slide->s_avatar = "" ;
        }

        $slide->save();

        return redirect('admin.get.create.slide')->with('thongbao','Thêm tin thành công');
    }

    public function action(Request $request, $action, $id)
    {
        if($action)
        {
            $slide = Slide::find($id);
            switch ($action) {
                case 'delete':
                    $slide->delete();
                    break;
            }
        }

        return redirect()->back();
    }
}
