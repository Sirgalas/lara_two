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
            'subject' => 'required|min:5|max:250',
            'message' => 'min:5|max:500',
            'email'=> 'required|email|max:250',
            'name'=>'required|string|min:5|max:250'
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'Имя',
            'message'=>'Сообщение',
            'email'=>'E-mali',
            'subject'=>'Тема'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле Имя обязательное',
            'name.string' => 'Поле Имя строкове',
            'name.min' => 'Поле B должно содержать не меньше 5 букв',
            'name.max' => 'Поле Тема должно содержать не больше 250 букв',
            'message.min' => 'Поле Тема должно содержать не меньше 5 букв',
            'message.max' => 'Поле Тема должно содержать не больше 500 букв',
            'email.required' => 'Поле E-mali обязательное',
            'email.email' => 'Поле E-mali не соответствует шаблону',
            'subject.required' => 'Поле Тема обязательное',
            'subject.min' => 'Поле Тема должно содержать не меньше 5 букв',
            'subject.max' => 'Поле Тема должно содержать не больше 250 букв'
        ];
    }
}
