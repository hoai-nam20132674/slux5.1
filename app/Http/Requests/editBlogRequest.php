<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class editBlogRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'url' => 'required|unique:blogs,url'.$this->id,
            'title' =>'required',
            'seo_keyword'=>'required',
            'seo_description'=>'required',
            'image'=>'required|unique:images,name'.$this->id
 

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
