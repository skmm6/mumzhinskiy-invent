<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TechRequest extends FormRequest
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
                'invent' => 'required',
                'name' => 'required',
                'col' => 'required',
                'price' => 'required'
        ];
    }

    public function attributes() {
        return [
            'invent' => 'Инвентраный номер'
        ];
    }


    public function messages() {
        return [
            'invent.required' => 'Поле инвентраный номер являеться обязательным',
            'name.required' => 'Поле наименование являеться обязательным',
            'col.required' => 'Поле количество являеться обязательным',
            'price.required' => 'Поле цена за 1шт. в руб. являеться обязательным',
        ];
    }

}
