<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapTin extends FormRequest
{
    public function authorize(){ return true; }
    public function rules() {return [
        'lang' => ['required'],
        'tieuDe' => ['required','min:3','max:200'],
        'tomTat' => ['required','min:3'],
        'urlHinh' => ['required'],
        'ngayDang' => ['required'],
        'noiDung' => ['required','min:10'],
        ];
    }
    public function messages(){ return [
        'lang.required' => 'Bạn chưa nhập ngôn ngữ!',
        'tieuDe.required' => 'Bạn chưa nhập tiêu đề!',
        'tieuDe.min' => 'Tiêu đề tối thiểu 3 kí tự!',
        'tieuDe.max' => 'Tiêu đề dài tối thiểu 200 kí tự!',
        'tomTat.required' => 'Bạn chưa nhập thứ tự!',
        'tomTat.min' => 'Tóm tắt tối thiểu 3 kí tự!',
        'urlHinh.required' => 'Bạn chưa nhập nhập hình ảnh!',
        'ngayDang.required' => 'Bạn chưa chọn ngày đăng!',
        'noiDung.required' => 'Bạn chưa nhập nội dung!',
        'noiDung.min' => 'Nội dung tin tối thiểu 10 kí tự!',
       ];
   }
}
