<?php

namespace App\Http\Requests\Auth;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => ["required"],
            "email" => ["required", "email", "unique:users,email"],
            "password" => ["required", "min:6", "confirmed"],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            "name.required" => "Vui lòng nhập tên",
            "email.required" => "Vui lòng nhập email",
            "email.email" => "Email không đúng định dạng",
            "email.unique" => "Email đã tồn tại",
            "password.required" => "Vui lòng nhập mật khẩu",
            "password.min" => "Mật khẩu phải có ít nhất 6 ký tự",
            "password.confirmed" => "Mật khẩu không khớp",
        ];
    }
}
