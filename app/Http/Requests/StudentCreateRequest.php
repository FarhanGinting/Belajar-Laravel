<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
            'nis' => 'unique:students|max:10|required',
            'gender' => 'required',
            'name' => 'max:50|required',
            'class' => 'required',
        ];
    }
    public function attributes()
    {
        return [
            'class_id' => 'class',
        ];
    }
    public function messages()
    {
        return [
            'nis.max' => 'Nis Melebihi Batas :max',
            'nis.unique' => 'Nis Tidak Boleh Sama',

        ];
    }
}
