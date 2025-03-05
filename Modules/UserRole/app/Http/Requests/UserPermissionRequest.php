<?php

namespace Modules\UserRole\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPermissionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'permission' => 'required|array|min:1',
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
    public function messages()
    {
        return [
            'permission.required' => 'Ən azı bir icazə seçilməlidir.',
            'permission.array' => 'Icazələr array formatında olmalıdır.',
            'permission.min' => 'Ən azı bir icazə seçilməlidir.',
        ];
    }
}
