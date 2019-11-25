<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscussionSavingRequest extends FormRequest
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
            'name' => 'required',
            'contact' => 'required',
            'files' => 'file|mimes:jpg,jpeg,png,zip,rar,pdf,doc,odt,docx|max:5120'
        ];
    }
}
