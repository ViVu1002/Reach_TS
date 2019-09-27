<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\RequestLoaiTin;

class RequestLoaiTin extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    
     public function rules()
    {
        return [
            'lt_name'=>'required|unique:loaitins,lt_name,'.$this->id,
            'lt_category_id'=>'required',
            'lt_title_seo'=>'required',
            'lt_avatar'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages()
    {
        return[
            'lt_name.required'=>'Trường này không được để trống',
            'lt_name.unique'=>'Tên loại tin đã tồn tại',
            'lt_category_id.required'=>'Trường này không được để trống',
            'lt_title_seo.required'=>'Trường này không được để trống',
            'lt_avatar.required'=>'Trường này không tồn tại',
            'lt_avatar.mimes'=>'Bạn chỉ có thể tải ảnh lên có đuôi jpeg , png, jpg , gif'
        ];
    }
}
