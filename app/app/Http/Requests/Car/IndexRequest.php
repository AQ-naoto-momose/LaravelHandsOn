<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['nullable', 'string'],
            'cc' => ['nullable', 'integer', 'min:0'],
            'date_from' => ['nullable', 'date'],
            'date_to' => ['nullable', 'date'],
        ];
    }

    public function attributes()
    {
        return [
            'name' => '車名',
            'cc' => '排気量',
            'date_from' => '販売開始日（From）',
            'date_to' => '販売開始日（To）',
        ];
    }
}
