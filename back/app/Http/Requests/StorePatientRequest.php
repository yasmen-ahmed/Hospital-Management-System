<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StorePatientRequest extends FormRequest
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
            "name" => ["required"],
            "email" => ["required", "email", "unique:users,email"],
            "password" => ["required", Password::min(8)],
            "gender" => ["required", "in:0,1"],
            "date_of_birth" => ["required", "date"],
            "phone_number" => ["required"]
        ];
    }
}
