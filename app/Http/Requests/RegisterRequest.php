<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string'],
            'blood_type' => ['required', 'string'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string'],
            'country' => ['required', 'string'],
            'birth_date' => ['required', 'date', 'before_or_equal:' . now()->subYears(18)->format('Y-m-d')],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'description' => ['required', 'string', 'min:10'],
            'phone_number' => ['required', 'string', 'regex:/^(\+62|0)[0-9]{8,15}$/'],
            'profile_picture' => ['required', 'string', 'url'],
        ];
    }

    public function messages(): array
    {
        return [
            'birth_date.before_or_equal' => 'Anda harus berusia 18 tahun atau lebih.',
            'phone_number.regex' => 'Format nomor telepon tidak valid.',
        ];
    }


}
