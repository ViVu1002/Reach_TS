<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestContact;
use App\Models\Contact;
use Str;

class AdminContactController extends Controller
{
    public function index()
    {
        $contacts =  Contact::paginate(10);

        $viewData = [
            'contacts' => $contacts
        ];
        return view('admin::contact.index',$viewData);
    }

    public function create()
    {
        return view('admin::contact.create');
    }

    public function store(RequestContact $requestContact)
    {
        $this->insertOrUpdate($requestContact);
        return redirect()->back();
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('admin::contact.update', compact('contact'));
    }

    public function update(RequestContact $requestContact, $id)
    {
        $this->insertOrUpdate($requestContact, $id);

        return redirect()->back();
    }

    public function insertOrUpdate($requestContact, $id='')
    {
        $contact = new Contact();

        if($id) $contact = Contact::find($id);

        $contact->con_name = $requestContact->con_name;
        $contact->con_slug = Str::slug($requestContact->con_name);
        $contact->con_title_seo = $requestContact->con_title_seo ? $requestContact->con_title_seo : $requestContact->con_name;
        $contact->con_content = $requestContact->con_content;

        if($requestContact->hasFile('con_avatar'))
        {
            $file = $requestContact->file('con_avatar');

            $name = $file->getClientOriginalName();
            $image = Str::random(4)."_". $name;
            while (file_exists("upload/contact/".$image))
            {
                 $image = Str::random(4)."_". $name;
            }
            $file->move("upload/contact",$image);
            $contact->con_avatar = $image;
        }
        else
        {
            $contact->con_avatar = "" ;
        }

        $contact->save();

        return redirect('admin.get.create.contact')->with('thongbao','Thêm tin thành công');
    }

    public function action(Request $request, $action, $id)
    {
        if($action)
        {
            $contact = Contact::find($id);
            switch ($action) {
                case 'delete':
                    $contact->delete();
                    break;
            }
        }

        return redirect()->back();
    }
}
