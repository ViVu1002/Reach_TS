<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestTinTuc;
use App\Models\TinTuc;
use App\Models\Category;
use Str;

class AdminTinTucController extends Controller
{
    public function index(Request $request)
    {
        $tintucs = TinTuc::whereRaw(1);

        if($request->name) $tintucs->where('tt_name','like','%'.$request->name.'%');

        $tintucs = $tintucs->paginate(10);

        $viewData = [
            'tintucs' => $tintucs 
        ];
        return view('admin::tintuc.index',$viewData);
    }

    public function create()
    {
        $categories = $this->getCategories();

        return view('admin::tintuc.create',compact('categories'));
    }

    public function store(RequestTinTuc $requestTinTuc)
    {
        $this->insertOrUpdate($requestTinTuc);
        return redirect()->back();
    }

    public function getCategories()
    {
        return Category::all();
    }

    public function edit($id)
    {
        $tintuc = TinTuc::find($id);
        return view('admin::tintuc.create',compact('tintuc'));
    }

    public function update(RequestTinTuc $requestTinTuc,$id)
    {
        $this->insertOrUpdate($requestTinTuc,$id);
        return redirect()->back();
    }

    public function insertOrUpdate($requestTinTuc,$id='')
    {
        $tintuc = new TinTuc();

        if($id) $tintuc = TinTuc::find($id);

         $tintuc->tt_name = $requestTinTuc->tt_name;
         $tintuc->tt_slug = Str::slug($requestTinTuc->tt_name);
         $tintuc->tt_content = $requestTinTuc->tt_content;
         $tintuc->tt_category_id = $requestTinTuc->tt_category_id;
         $tintuc->tt_title_seo = $requestTinTuc->tt_title_seo ? $requestTinTuc->tt_title_seo : $requestTinTuc->tt_name; 

         if($requestTinTuc->hasFile('tt_avatar'))
        {
            $file = $requestTinTuc->file('tt_avatar');
            $name = $file->getClientOriginalName();
            $avatar = Str::random(5) . "_" . $name;
 
            while (file_exists("upload/tintuc/" . $avatar)) {
                 $avatar = str_random(5) ."_". $name;
            }
            $file->move("upload/tintuc", $avatar);
            $tintuc->tt_avatar = $avatar;
        }

        else{
            $tintuc->tt_avatar = "";
        }

         $tintuc->save();

         return redirect('admin.get.create.tintuc')->with('thongbao','Thêm tin thành công');
    }

     public function action( $action, $id)
    {
        if($action)
        {
            $tintuc = TinTuc::find($id);
            switch ($action)
            {
                case 'delete':
                   $tintuc->delete();
                    break;

                case 'active':
                   $tintuc->tt_active = $tintuc->tt_active ? 0 : 1 ;
                   $tintuc->save();
                    break;
            }
        }

        return redirect()->back();  
    }
}
