<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestLoaiTin;
use App\Models\Category;
use App\Models\LoaiTin;
use Str;

class AdminLoaiTinController extends Controller
{
    public function index(Request $request)
    {
        $loaitin = LoaiTin::with('category:id,c_name');

        if($request->name) $loaitin->where('lt_name', 'like', '%'.$request->name.'%');

        $loaitin = $loaitin->orderByDesc('id')->paginate(10);

        $viewData = [
            'loaitin' => $loaitin 
        ];
        return view('admin::loaitin.index',$viewData);
    }

    public function create()
    {
        $categories = $this->getCategories();
        return view('admin::loaitin.create',compact('categories'));
    }

    public function store(RequestLoaiTin $requestLoaiTin)
    {
        $this->insertOrUpdate($requestLoaiTin);
        return redirect()->back();
    }

    public function edit($id)
    {
        $loaitin = LoaiTin::find($id);
        $categories = $this->getCategories();
        return view('admin::loaitin.update',compact('loaitin','categories'));
    }

    public function update(RequestLoaiTin $requestLoaiTin,$id)
    {
        $this->insertOrUpdate($requestLoaiTin,$id);
        return redirect()->back();
    }

    public function getCategories()
    {
        return Category::all();
    }

    public function insertOrUpdate($requestLoaiTin,$id='')
    {
        $loaitin = new LoaiTin();

        if($id) $loaitin = LoaiTin::find($id);
        $loaitin->lt_name = $requestLoaiTin->lt_name;
        $loaitin->lt_slug = Str::slug($requestLoaiTin->lt_name);
        $loaitin->lt_category_id = $requestLoaiTin->lt_category_id;
        $loaitin->lt_title_seo = $requestLoaiTin->lt_title_seo ? $requestLoaiTin->lt_title_seo : $requestLoaiTin->lt_name;

        if($requestLoaiTin->hasFile('lt_avatar'))
        {
            $file = $requestLoaiTin->file('lt_avatar');

            $name = $file->getClientOriginalName();
            $image = Str::random(4)."_". $name;
            while (file_exists("upload/loaitin/".$image))
            {
                 $image = Str::random(4)."_". $name;
            }
            $file->move("upload/loaitin",$image);
            $loaitin->lt_avatar = $image;
        }
        else
        {
            $loaitin->lt_avatar = "" ;
        }

        $loaitin->save();

        return redirect('admin.get.create.loaitin')->with('thongbao','Thêm tin thành công');
    }

     public function action( $action, $id)
    {
        if($action)
        {
            $loaitin = LoaiTin::find($id);
            switch ($action)
            {
                case 'delete':
                   $loaitin->delete();
                    break;

                case 'active':
                   $loaitin->lt_active = $loaitin->lt_active ? 0 : 1 ;
                   $loaitin->save();
                    break;

                case 'hot':
                   $loaitin->lt_hot = $loaitin->lt_hot ? 0 : 1 ;
                   $loaitin->save();
                    break;
            }
        }

        return redirect()->back();  
    }
}
