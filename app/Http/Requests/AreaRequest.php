<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AreaRequest extends FormRequest
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
            'name' => 'required|max:20',
            'url' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => '必須項目です。',
            'name.max:20' => '20文字以内で入力してください。',
            'url.required' => '必須項目です。',
        ];
    }
}