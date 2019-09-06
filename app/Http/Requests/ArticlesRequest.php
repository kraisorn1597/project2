<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticlesRequest extends FormRequest
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
            'admin_id' => 'required|string|max:255',
            'articles_category_id' => 'required|string|max:50',
            'title' => "required|string|max:50|unique:articles,title",
            'description' => 'required|string|max:255',
            'short_description' => 'required|string|max:50',
            'image' => ['required', 'file', 'image', 'max:5000'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'กรุณาเเขียนชื่อเรื่อง',
            'articles_category_id' => 'กรุณาเลือกประเภท',
            'first_name.required'  => 'กรุณากรอก First Name',
            'id_card.required'  => 'กรุณากรอก ID Card',
            'tel.required'  => 'กรุณากรอก Phone Number',
            'birthday.required'  => 'กรุณากรอกวันเกิด',
            'address.required'  => 'กรุณากรอกที่อยู่',
        ];
    }
}
