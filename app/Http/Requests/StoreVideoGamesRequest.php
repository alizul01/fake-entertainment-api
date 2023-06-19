<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideoGamesRequest extends FormRequest
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
            'title' => 'required|string|min:3|max:255',
            'developer' => 'required|string|min:3|max:255',
            'genre' => 'required|string',
            'year' => 'required|integer|digits:4',
            'price' => 'required|integer|digits_between:1,10',
            'stock' => 'required|integer|digits_between:1,10',
            'description' => 'required|string|min:10|max:255',
            'image' => 'required|string|min:10|max:255',
        ];
    }
}
