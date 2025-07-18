<?php

namespace App\Http\Requests\auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

/**
 * @property-read string email;
 * @property-read string password;
 */
class AuthRequest extends FormRequest
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
            'email' =>  ['required', 'email'],
            'password' => ['required']
        ];
    }

    public function attempt(): bool
    {
        $credentials = $this->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $this->session()->regenerate();
            return true;
        }

        return false;
    }
}
