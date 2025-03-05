<?php

namespace Modules\UserRole\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRoleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Başlıq tələb olunur.',
            'title.string' => 'Başlıq mətn olmalıdır.',
            'title.max' => 'Başlıq 255 simvoldan uzun ola bilməz.',
        ];
    }
}
