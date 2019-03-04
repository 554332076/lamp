<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
            
                'gname' => 'required',
                'gprice' => 'required',
                'gpic' => 'required',
                'stock' => 'required',
                'gdesc' => 'required'
               
                
        ];
    }
    public function messages()
    {
        return [
            'gname.required' => '商品名称为空',
            'gprice.required' => '商品价格要填',
            'gpic.required' => '商品图片没选哦',
            'stock.required' => '库存忘填了哦',
            'gdesc.required' => '描述一下商品吧'
        
            
        ];
    }
}
