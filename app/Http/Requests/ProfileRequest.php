<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string','min:10', 'max:11'],
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.max' => 'Số điện thoại của bạn không đúng',
            'phone.min' => 'số điện thoại của bạn không đúng'
        ];
    }
}
