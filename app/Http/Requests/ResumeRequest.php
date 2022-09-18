<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResumeRequest extends FormRequest
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
            'name' => 'required|max:255|string',
            'dob' => 'nullable|date',
            'gender' => 'nullable|integer|min:0|max:1',
            'nationality' => 'nullable|alpha|max:255',
            'address' => 'nullable|max:1023',
            'phone' => 'nullable|integer',
            'email' => 'nullable|email|max:255',
            'website' => 'nullable|url|max:255',
            'summary' => 'nullable|max:1023',
            'education' => 'nullable|max:1023',
            'experience' => 'nullable|max:1023',
        ];
    }
}
