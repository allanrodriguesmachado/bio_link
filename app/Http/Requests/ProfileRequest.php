<?php

namespace App\Http\Requests;

use App\Rules\CheckProfile;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;

/**
 * @var UploadedFile $photo;
 */
class ProfileRequest extends FormRequest
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
            'name' => ['required'],
            'handler' => ['required', new CheckProfile],
            'photo' => ['nullable', 'image'],
            'description' => ['required'],
        ];
    }
}
