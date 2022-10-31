<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'O Campo e-mail é obrigatório',
            'email.email' => 'O Campo e-mail deve ser um e-mail válido',
            'password.required' => 'O Campo senha é obrigatório',
            'password.min' => 'O Campo senha deve ter no mínimo 6 caracteres',
        ];
    }
}
