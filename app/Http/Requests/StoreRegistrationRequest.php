<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
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
//            'name|required|max:255',
//            'email|required|email|users:unique',
//            'password|required|confirmed|min:8|max:64',
//            'gender|required',
//            'purpose|required',
//
//            'pace|required',
//            'weight|required|max:512',
//            'purpose_weight|required|min:10|max:512',
//            'growth|required|max:512|min:1',
//            'age|required|max:200|min:1',
        ];
    }
}
