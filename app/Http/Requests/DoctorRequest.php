<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//TODO: Se crea $ php artisan make:request DoctorRequest
class DoctorRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'email' => ['required', 'email','unique:users'],
            'address' => ['required', 'string'],
            'phone' => ['required','numeric', 'digits:9'],
            'password' => ['required', 'string','min:8','confirmed'],
        ];
    }
}
