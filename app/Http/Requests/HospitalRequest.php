<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HospitalRequest extends FormRequest
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
            'hos_name' => 'required',
            'hos_province' => 'required',
            'hos_district' => 'required',
            'hos_address' => 'required',
            'hos_latitude' => 'required',
            'hos_longitude' => 'required',
            'hos_img' => 'mimes:jpeg,jpg,png',
        ];
    }


    public function message()
    {
        return [
            'hos_name.required' => 'กรุณากรอกชื่อโรงพยาบาล',
            'hos_province.required' => 'กรุณากรอกจังหวัด',
            'hos_district.required' => 'กรุณากรอกอำเภอ',
            'hos_address.required' => 'กรุณากรอกที่อยู่',
            'hos_latitude.required' => 'กรุณากรอละติจูด',
            'hos_longitude.required' => 'กรุณากรอกลองติจูด',
            'hos_img.required' => 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,jpg,png',
               
        ];
    }

}
