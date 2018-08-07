<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>'required|min:3',
            'content'=>'required|min:5'
        ];
    }
    public function messages()
 {
     return [
         'title.required' => 'Title chưa có thông tin',
         'title.min' => 'Title phải  chứa ít nhất 3 ký tự',
         'content.required' => 'Content chưa có thông tin',
         'content.min' => 'Content phải chứa ít nhất 5 ký tự'
     ];
 }
}
