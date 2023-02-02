<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrokerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // user is authorised to make this request
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
            'name' => ['required', 'unique:brokers', 'max:255'],
            'address' => ['required'],
            'city' => ['required'],
            'zip_code' => ['required'],
            'phone_number' => ['required', 'numeric', 'digits:10'],
            'logo_path' => ['required']
        ];
    }
}
