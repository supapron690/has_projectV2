<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiseasesRequest extends FormRequest
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
            'ds_name' => 'required',
            'ds_content' => 'required',
            'ds_image' => 'mimes:jpeg,jpg,png',
        ];
    }


    public function message()
    {
        return [
            'ds_name.required' => 'กรุณากรอกชื่อโรคหรืออากร',
            'ds_content.required' => 'กรุณากรอรายละเอียด',
            'ds_image.required' => 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,jpg,png',
        ];
    }
}
