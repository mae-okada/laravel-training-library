<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'         => 'required|max:50',
            'author_id'     => 'required',
            'isbn'          => 'required|max:13',
            'publisher'     => 'nullable|max:50',
            'category'      => 'nullable|max:50',
            'pages'         => 'nullable',
            'language'      => 'nullable',
            'publish_date'  => 'nullable',
            'subjects'      => 'nullable',
            'desc'          => 'nullable',
            'image_path'    => 'nullable',
        ];
    }
}
