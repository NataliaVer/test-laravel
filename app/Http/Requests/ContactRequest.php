<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required|email',
            'subject' => 'required|min:4|max:50',
            'message' => 'required'
        ];
    }

    public function attributes() {
        return [
            'name' => "Ім'я"
        ];
    }

    public function messages() {
        return [
            'name.required' => "Поле ім'я є обов'язковим",
            'email.required' => "Поле email є обов'язковим",
            'email.email' => "Введіть корректний email",
            'subject.required' => "Поле тема є обов'язковим",
            'subject.min' => "Поле тема має бути не менше 4 символів",
            'subject.max' => "Поле тема має бути не більше 50 символів",
            'message.required' => "Поле повідомлення є обов'язковим"
        ];
    }
}
