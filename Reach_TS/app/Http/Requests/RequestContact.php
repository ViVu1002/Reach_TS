<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestContact extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'con_name'=>'required|unique:contacts,con_name,'.$this->id,
            'con_title_seo'=>'required',
            'con_content'=>'required',
            'con_avatar'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ];
    }

    public function messages()
    {
        return[
            'con_name.required'=>'Trường này không được để trống',
            'con_name.unique'=>'Tên bài viết đã tồn tại',
            'con_content.required'=>'Trường này không được để trống',
            'con_title_seo.required'=>'Trường này không được để trống',
            'con_avatar.required'=>'Trường này không tồn tại',
            'con_avatar.mimes'=>'Bạn chỉ có thể tải ảnh lên có đuôi jpeg , png, jpg , gif'
        ];
    }
}
