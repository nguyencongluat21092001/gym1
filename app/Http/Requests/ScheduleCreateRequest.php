<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleCreateRequest extends FormRequest
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
            "post_day" => 'required',
            "post_hour" =>'required',
            "post_class" =>'required',
            "post_pt" =>'required',

        ];
    }
    public function messages()
    {
        return [
            "required"=>'khong duoc de trong',
        ];
    }
}