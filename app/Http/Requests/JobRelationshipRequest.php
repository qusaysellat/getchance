<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRelationshipRequest extends FormRequest
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
            'start' => 'nullable|date',
            'finish' => 'nullable|date',
            'approved' => 'nullable|integer|min:0|max:1',
            'rating' => 'nullable|integer|min:1|max:10',
            'comment' => 'nullable|max:1023',
            'job_position_id' => 'required|exists:job_positions,id',
        ];
    }
}
