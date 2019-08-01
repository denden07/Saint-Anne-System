<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUsersCreateRequest extends FormRequest
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
            //
            'email'=>'required',
            'password'=>'required',
            'role_id'=>'required',
            'firstName'=>'required',
            'middleName'=>'required',
            'lastName'=>'required',
            'age'=>'required',
            'mobileNo'=>'required',
            'dob'=>'required',
            'gender_id'=>'required',
            'barnagay'=>'required',
            'municipality'=>'required',
            'zipCode'=>'required',
            'username'=>'required',

        ];
    }
}

