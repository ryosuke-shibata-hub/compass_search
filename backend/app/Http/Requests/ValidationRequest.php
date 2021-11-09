<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ValidationRequest extends FormRequest
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

        return  [

            'first_name' => ['bail','required','string','max:5',],
            'last_name' => ['bail','required','string','max:5',],

            'first_name_kana' => ['bail','required','string','max:5','regex:/^[ァ-ヴ]+$/u'],
            'last_name_kana' => ['bail','required','string','max:5','regex:/^[ァ-ヴ-|ー]+$/u'],

            'birthday_year' => ['bail','required','alpha_num','gte:1980','lte:2100'],
            'birthday_month' => ['bail','required','alpha_num','gte:1','lte:12',],
            'birthday_day' => ['bail','required','alpha_num','gte:1','lte:31'],

            'admission_date_year' => ['bail','required','alpha_num','gte:2000','lte:2100'],
            'admission_date_month' => ['bail','required','alpha_num','gte:1','lte:12'],
            'admission_date_day' => ['bail','required','alpha_num','gte:1','lte:31'],

            'gender' => ['required'],

            'email' => ['bail','required','max:100','unique:users','email'],

            'password' => ['bail','required','string','max:30','min:8'],

            'password_comfirm' => ['bail','required','string','max:30','min:8','same:password',],

           'role' => ['required'],

           'login_email' => ['required','string','email','max:100','exists:users',],

        ];
    }

    public function messages() {
        return [

            'first_name.regex' => '名前(姓)は漢字で入力してください',
            'last_name.regex' => '名前(名)は漢字で入力してください',

            'first_name_kana.regex' => '名前(セイ)はカタカナで入力してください',
            'last_name_kana.regex' => '名前(メイ)はカタカナで入力してください',

            'birthday_year.gte' => '誕生日(年)は1980年~から入力してください',
            'birthday_month.gte' => '誕生日(月)は1~12月で入力してください',
            'birthday_day.gte' => '誕生日(日)は1~31日で入力してください',
            'birthday_year.lte' => '誕生日(年)は1980年~から入力してください',
            'birthday_month.lte' => '誕生日(月)は1~12月で入力してください',
            'birthday_day.lte' => '誕生日(日)は1~31日で入力してください',

            'admission_date_year.gte' => '入学日(年)は1980年~から入力してください',
            'admission_date_month.gte' => '入学日(月)は1~12月で入力してください',
            'admission_date_day.gte' => '入学日(日)は1~31日で入力してください',
            'admission_date_year.lte' => '入学日(年)は1980年~から入力してください',
            'admission_date_month.lte' => '入学日(月)は1~12月で入力してください',
            'admission_date_day.lte' => '入学日(日)は1~31日で入力してください',

        ];
    }


}
