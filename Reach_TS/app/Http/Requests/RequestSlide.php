<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestSlide extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            's_name' =>'required|unique:slides,s_name'.$this->id,
            's_avatar'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function message()
    {
        return [
            's_name.required' => 'Trường này không được để trống',
            's_name.unique' =>'Slile này đã tồn tại',
            's_avatar.required'=>'Trường này không tồn tại',
            's_avatar.mimes'=>'Bạn chỉ có thể tải ảnh lên có đuôi jpeg , png, jpg , gif'
        ];
    }
}
