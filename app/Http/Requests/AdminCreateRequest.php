<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCreateRequest extends FormRequest
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
            "admin_name" => 'required',
            "admin_phone" => 'required',
            "admin_email" => 'required',
            "admin_password" => 'required',
        ];
    }
    public function messages()
    {
        return [
            "required"=>'khong duoc de trong',
        ];
    }
}
