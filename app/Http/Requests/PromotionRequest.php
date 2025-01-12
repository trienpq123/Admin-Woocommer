<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromotionRequest extends FormRequest
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
            'name' => ['required', 'max:255'],
            'discount' => ['required', 'numeric','min:0','max:100'],
            'date_start' => ['date'],
            'date_end' => [ 'date', 'after:date_start'],
            'id_product' => ['required']
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
            'name.required' => 'Tên khuyến mãi không được để trống.',
            'discount.required' => 'Không được bỏ trống',
            'discount.numeric' => 'Bạn vừa nhập không phải số',
            'discount.min' => 'Phải nhập ít nhất là 0%',
            'discount.max' => 'Phải nhập nhất la 100%',
            'date_start.date' => 'Không phải ngày tháng',
            'date_end.date' => 'Không phải ngày tháng',
            'date_end.after' => 'Ngày kết thúc phải sau ngày bat dau',
            'id_product.required' => 'Không được bỏ trống'

        ];
    }
}
