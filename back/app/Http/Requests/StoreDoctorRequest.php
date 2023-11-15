<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Validation\Rules\Password;

class StoreDoctorRequest extends FormRequest
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
            'name' => ['required'],
            "email" => ["required", "email", "unique:users,email"],
            "password" => ["required", Password::min(8)],
            "phone_number" => ["required"],
            "shift_id" => ['required', "exists:shifts,id"],
            'department_id' => ['required', "exists:departments,id"],
            "image" => ["mimes:jpg,jpeg,png"]
        ];
    }
}