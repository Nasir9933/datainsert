<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storeblood_donation_dataRequest extends FormRequest
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
            // 'blood_group'=>'required',
            // 'name'=>'required',
            // 'phone_number'=>'required',
            // 'email'=>'required',
            // 'address'=>'required',

        ];
    }
}
