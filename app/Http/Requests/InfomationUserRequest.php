<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfomationUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' =>  'required',
            'email' =>  'required|email:rfc,dns',
            'sdt' =>  'required|integer'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Không được để trống name.',
            'email.required' => 'Không được để trống email.',
            'email.email' => 'Email không hợp lệ.',
            'sdt.required' => 'Không được để trống sdt.',
            'sdt.integer' => 'Số điện thoại không hợp lệ.'
        ];
    }
}