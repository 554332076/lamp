<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tjwxianding extends FormRequest
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
            'tlink'=>'required',
            'tdesc'=>'required',
            'tpic'=>'required'

        ];
    }
     public function messages()
    {
        return [
            'title.required' => '标题不能为空',
            'tlink.required' => '链接要填哦',
            'tpic.required' => '商品图片没选哦',
            'tdesc.required' => '介绍一吧'
           
        
            
        ];
    }
}
