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
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'string', 'email'],
            'tel' => ['required', 'numeric', 'digits:5'],
            'address' => ['required'],
            'content' => ['required', 'max:120'],
        ];
    }

    public function messages()
    {
      return[
        'first_name.required' => '姓を入力してください',
        'last_name.required' => '名を入力してください',
        'email.required' => 'メールアドレスを入力してください',
        'email.string' => 'メールアドレスを文字列で入力してください',
        'email.email' => '有効なメールアドレス形式を入力してください',
        'tel.required' => '電話番号を入力してください',
        'tel.numeric' => '電話番号を数値で入力してください',
        'tel.digits' => '電話番号を5桁までの数字で入力してください',
        'address.required' => '住所を入力してください',
        'content.required' => 'お問い合わせ内容を入力してください',
        'content.max' => 'お問い合わせ内容は120文字以内で入力してください',
      ];
    }
}
