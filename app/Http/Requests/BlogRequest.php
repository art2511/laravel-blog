<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'title' => 'required',
            'text' => 'required|max:500'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Заполните заголовок',
            'text.required' => 'Текст блога не может быть пустым',
            'text.max:500' => 'В тексте блога может быть не больше 500 символов'
        ];
    }
}
