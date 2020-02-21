<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCustomerRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|string|max:255|unique:customers,email,'.$this->customer,
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048'
            //
        ];
    }
}
