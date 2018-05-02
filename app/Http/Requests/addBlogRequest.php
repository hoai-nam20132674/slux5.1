<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class addBlogRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'url' => 'required|unique:blogs,url',
            'title' =>'required',
            'seo_keyword'=>'required',
            'seo_description'=>'required',
            'image'=>'required|unique:images,name'
 

        ];
    }
    public function messages(){
        return [
            
            
            'url.required' => 'Vui lòng nhập Url',
            'url.unique' => 'Url này đã được sử dụng',
            'title.required' =>' Vui lòng nhập tiêu đề danh mục',
            'seo_keyword.required'=>'Vui lòng nhập seo keywords',
            'seo_description.required'=>'Vui lòng nhập seo description',
            'image.unique' => 'Ảnh bị trùng',
            'image.required' => 'Vui lòng chọn ảnh'
            
        ];
    }
}
