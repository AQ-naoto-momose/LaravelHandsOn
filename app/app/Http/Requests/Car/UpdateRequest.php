<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'cc' => ['required', 'integer', 'min:0'],
            'date' => ['required', 'date'],
            'memo' => ['nullable', 'string'],
            'image' => ['nullable', 'mimetypes:image/jpeg,image/png'],
        ];
    }

    public function attributes()
    {
        return [
            'name' => '車名',
            'cc' => '排気量',
            'date' => '販売日',
            'memo' => 'メモ',
            'image' => '画像',
        ];
    }
}
