<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobPositionRequest extends FormRequest
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
            'depname' => 'required|max:255',
            'position' => 'required|max:255',
            'description' => 'nullable|max:1023',
            'category_id' => 'required|exists:categories,id',
            'skill_1' => ['nullable', 'exists:skills,id'],
            'skill_2' => ['nullable', 'exists:skills,id', 'different:skill_1'],
            'skill_3' => ['nullable', 'exists:skills,id', 'different:skill_2', 'different:skill_1'],
        ];
    }
}
