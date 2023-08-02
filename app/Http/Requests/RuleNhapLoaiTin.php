<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapLoaiTin extends FormRequest
{
    public function authorize(){ return true; }
    public function rules() {return [
        'ten' => ['required','min:3','max:20'],
        'thutu' => ['numeric','required','integer', 'min:0'],
        ];
    }
    public function messages(){ return [
         'ten.required' => 'Bạn chưa nhập tên loại!',
         'ten.min' => 'Tên loại ít tối thiểu 3 kí tự!',
         'ten.max' => 'Tên loại dài tối thiểu 30 kí tự!',
         'thutu.required' => 'Bạn chưa nhập thứ tự!',
         'thutu.min' => 'Số thứ tự lớn hơn 0!',
         'thutu.numeric' => 'Số thứ tự không được nhập chữ!',
         'thutu.integer' => 'Số thự tự phải là số nguyên!'
       ];
   }
}
