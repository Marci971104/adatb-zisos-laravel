<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudalData extends FormRequest
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
            
            "name"=>"required|min:4|max:20",
            "email"=>"required",
            "phone"=>"required|digits_between:9,11"

        ];
    }
    public function messages(){
        return[

            "name.required" => "Add meg a nevet te...!",
            "email.required" => "Add meg az emailt te...!",
            "phone.required" => "Add meg a telószámod te...!",
            "name.min"=>"név minimum 4 karakter"
        ];
    }
}
