<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class lbtxianding extends FormRequest
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
             'title'=>'required',
                'link'=>'required',
                'logoname'=>'required'
        ];
    }
     public function messages()
    {
        return [
          
            'title.required'=>'标题还没写哦',
            'link.required'=>'链接没写啊',
            'logoname.required'=>'图片没有上传'
            
        ];
    }
}
