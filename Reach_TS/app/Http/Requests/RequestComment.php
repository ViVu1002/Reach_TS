<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestComment extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
       return [
            'cmt_name'=>'required|unique:comments,cmt_name,'.$this->id,
            'cmt_content'=>'required',
        ];
    }

    public function messages()
    {
        return[
            'cmt_name.required'=>'Trường này không được để trống',
            'cmt_name.unique'=>'Tên bài viết đã tồn tại',
            'cmt_content.required'=>'Trường này không được để trống',
        ];
    }
}
