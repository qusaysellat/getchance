<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\SameUser;

class PostRequest extends FormRequest
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
            'title' => 'required|max:255',
            'content' => 'required|max:1023',
            'posttype' => 'required|integer|min:1|max:2',
            'user_id' => ['required', new SameUser()],
            'category_id' => 'required|exists:categories,id',
            'skill_1' => ['nullable', 'exists:skills,id'],
            'skill_2' => ['nullable', 'exists:skills,id', 'different:skill_1'],
            'skill_3' => ['nullable', 'exists:skills,id', 'different:skill_2', 'different:skill_1'],
        ];
    }
}
