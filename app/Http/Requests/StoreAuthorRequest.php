<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuthorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'date_of_birth' => 'nullable|date|before:today',
        ];
    }

    public function messages(): array
    {
        return[
            'name.required' => 'Name is required',
            'name.max' => 'Name cannot be longer than 100 characters',
            'date_of_birth.before' => 'Date must be before today'
        ];
    }
}
