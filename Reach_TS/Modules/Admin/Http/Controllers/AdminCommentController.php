<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestComment;
use App\Models\Comment;
use Str;

class AdminCommentController extends Controller
{
    public function index()
    {
        $comments = Comment::paginate(10);

        $viewData = [
            'comments' => $comments
        ];
        return view('admin::comment.index', $viewData);
    }

    public function create()
    {
        return view('admin::comment.create');
    }

    public function store(RequestComment $requestComment)
    {
        $this->insertOrUpdate($requestComment);
        return redirect()->back();
    }

    public function edit($id)
    {
        $comment = Comment::find($id);
        return view('admin::comment.update',compact('comment'));
    }

    public function update(RequestComment $requestComment, $id)
    {
        $this->insertOrUpdate($requestComment,$id);
        return redirect()->back();
    }

    public function insertOrUpdate($requestComment, $id='')
    {
        $comment = new Comment();

        if($id) $comment = Comment::find($id);

        $comment->cmt_name = $requestComment->cmt_name;
        $comment->cmt_slug = Str::slug($requestComment->cmt_name);
        $comment->cmt_content = $requestComment->cmt_content;
        $comment->cmt_avatar = $requestComment->avatar;

        $comment->save();
    }

    public function action($action, $id)
    {
        if($action)
        {
            $comment = Comment::find($id);
            switch ($action) {
                case 'delete':
                    $comment->delete();
                    break;
            }
        }

        return redirect()->back();  
    }

}
