<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Tên sinh viên không được để trống.',
            'major.required' => 'Ngành học không được để trống.',
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại.'
        ];
    }
}
