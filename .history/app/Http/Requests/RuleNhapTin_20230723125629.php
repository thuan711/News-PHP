<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapTin extends FormRequest
{
    public function authorize(){ return true; }
    public function rules() {return [
        'lang' => ['required'],
        'tieuDe' => ['required','min:3','max:200'],
        'thutu' => ['numeric','required','integer', 'min:0'],
        ];
    }
    public function messages(){ return [
        'lang.required' => 'Bạn chưa nhập ngôn ngữ!',
         'tieuDe.required' => 'Bạn chưa nhập tiêu đề!',
         'tieuDe.min' => 'Tiêu đề tối thiểu 3 kí tự!',
         'tieuDe.max' => 'Tiêu đề dài tối thiểu 200 kí tự!',
         'thutu.required' => 'Bạn chưa nhập thứ tự!',
         'thutu.min' => 'Số thứ tự lớn hơn 0!',
         'thutu.numeric' => 'Số thứ tự không được nhập chữ!',
         'thutu.integer' => 'Số thự tự phải là số nguyên!'
       ];
   }
}
