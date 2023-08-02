<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules() {return [
        'masv' => ['required','regex:/^PS\d{5}/'],
        'hoten' => ['required','min:3','max:20'],
        'tuoi' => 'required|interger|min:16|max:100',
        'ngaysinh' => ['required','regex:/\d{1,2}\/d{1,2}\/d{4}/'],
        'cmnd' => ['digits_between:9,10'],
        'email' => ['required','email','ends_with:@fpt.edu.vn'],
        ];
    }
    public function messages(){ return [
        'masv.required' => 'Bạn chưa nhập mã sinh viên',
        'masv.regex' => 'Bạn nhập mã sinh viên sai định dạng PS12345',
        'hoten.required' => 'Bạn chưa nhập họ tên',
        'hoten.min' => 'Họ tên tối thiểu 3 kí tự!',
        'hoten.max' => 'Họ tên dài tối thiểu 20 kí tự!',
        'tuoi.required' => 'Bạn chưa nhập tuổi',
        'tuoi.interger' => 'Tuổi bạn phải nhập số!',
        'tuoi.min' => 'Tối thiểu 16 tuổi!',
        'tuoi.max' => 'Tối đa 100 tuổi!',
        'ngaysinh.required' => 'Bạn chưa nhập nhập ngày sinh!',
        'ngaysinh.regex' => 'Ngày sinh định dạng dd/mm/yyyy',
        'cmnd.digits_between' => 'Bạn chưa nhập số chứng minh!',
        'email.required' => 'Bạn chưa nhập email!',
        'email.email' => 'Bạn nhập sai định dạng email!',
        'email.ends_with' => 'Đuôi mail theo định dạng @fpt.edu.vn',
       ];
    }
    function attributes(){
        return [
            'masv'=>'Mã sinh viên',
            'hoten'=>'hoten'
        ];
    }
}
