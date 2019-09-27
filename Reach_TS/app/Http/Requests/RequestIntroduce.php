<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestIntroduce extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'i_name'=>'required|unique:introduces,i_name,'.$this->id,
            'i_title_seo'=>'required',
            'i_content'=>'required',
            'i_avatar'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages()
    {
        return[
            'i_name.required'=>'Trường này không được để trống',
            'i_name.unique'=>'Tên bài viết đã tồn tại',
            'i_content.required'=>'Trường này không được để trống',
            'i_title_seo.required'=>'Trường này không được để trống',
            'i_avatar.required'=>'Trường này không tồn tại',
            'i_avatar.mimes'=>'Bạn chỉ có thể tải ảnh lên có đuôi jpeg , png, jpg , gif'
        ];
    }
}
