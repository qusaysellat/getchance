<?php

namespace App\Http\Requests;

use App\Rules\SameUser;
use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'content' => 'required|max:1023',
            'user1_id' => ['required', new SameUser()],
            'user2_id' => 'required|exists:users,id|different:user1_id',
        ];
    }
}
