<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersCreateRequest extends FormRequest
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
            "post_name" => 'required',
            "post_phone" =>'required',
            "post_email" =>'required',
            "post_password" =>'required',
            "post_repeatpassword" =>'required',
        ];
    }
    public function messages()
    {
        return [
            "required"=>'khong duoc de trong',
        ];
    }
}
