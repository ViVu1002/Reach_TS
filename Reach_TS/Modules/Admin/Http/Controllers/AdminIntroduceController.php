<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestIntroduce;
use App\Models\Introduce;
use Str;

class AdminIntroduceController extends Controller
{
    public function index()
    {
        $introduces = Introduce::paginate(10);

        $viewData = [
            'introduces' => $introduces
        ];

        return view('admin::introduce.index', $viewData);
    }

    public function create()
    {
        return view('admin::introduce.create');
    }

    public function store(RequestIntroduce $requestIntroduce)
    {
        $this->insertOrUpdate($requestIntroduce);
        return redirect()->back();
    }

    public function edit($id)
    {
        $introduce = Introduce::find($id);
        return view('admin::introduce.update',compact('introduce'));
    }

    public function update(RequestIntroduce $requestIntroduce, $id)
    {
        $this->insertOrUpdate($requestIntroduce,$id);
        return redirect()->back();
    }

    public function insertOrUpdate($requestIntroduce, $id='')
    {
        $introduce = new Introduce();

        if($id) $introduce = Introduce::find($id);

        $introduce->i_name = $requestIntroduce->i_name;
        $introduce->i_slug = Str::slug($requestIntroduce->i_name);
        $introduce->i_title_seo = $requestIntroduce->i_title_seo ? $requestIntroduce->i_title_seo : $requestIntroduce->i_name;
        $introduce->i_content = $requestIntroduce->i_content;
       
        if($requestIntroduce->hasFile('i_avatar'))
        {
            $file = $requestIntroduce->file('i_avatar');

            $name = $file->getClientOriginalName();
            $image = Str::random(4)."_". $name;
            while (file_exists("upload/introduce/".$image))
            {
                 $image = str_random(4)."_". $name;
            }
            $file->move("upload/introduce",$image);
            $introduce->i_avatar = $image;
        }
        else
        {
            $introduce->i_avatar = "" ;
        }

        $introduce->save();

        return redirect('admin.get.create.introduce')->with('thongbao','Thêm tin thành công');
    }

    public function action(Request $request, $action, $id)
    {
        if($action)
        {
            $introduce =  Introduce::find($id);
            switch ($action) {
                case 'delete':
                    $introduce->delete();
                    break;
            }
        }

        return redirect()->back();
    }
}
