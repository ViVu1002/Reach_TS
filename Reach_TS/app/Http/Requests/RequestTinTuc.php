<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestTinTuc extends FormRequest
{
    public function authorize()
    {
        return true;
    }

     public function rules()
    {
        return [
            'tt_name'=>'required|unique:tintucs,tt_name,'.$this->id,
            'tt_title_seo'=>'required',
            'tt_content'=>'required',
        ];
    }

    public function messages()
    {
        return[
            'tt_name.required'=>'Trường này không được để trống',
            'tt_name.unique'=>'Tên bài viết đã tồn tại',
            'tt_content.required'=>'Trường này không được để trống',
            'tt_title_seo.required'=>'Trường này không được để trống',
        ];
    }
}
