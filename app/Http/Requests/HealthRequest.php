<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HealthRequest extends FormRequest
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
            'ha_name' => 'required',
            'ha_content' => 'required',
            'ha_image' => 'mimes:jpeg,jpg,png',
        ];
    }


    public function message()
    {
        return [
            'ha_name.required' => 'กรุณากรอกชื่อบทความ',
            'ha_content.required' => 'กรุณากรอกรายละเอียดบทความ',
            'ha_image.required' => 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,jpg,png',
               
        ];
    }
}
