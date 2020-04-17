<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createClientRequest extends FormRequest
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
		'imy' => 'required',
		'familia' => 'required',
		'otchestvo' => 'required',
		'gorod' => 'required',
		'email' => 'required',
		'telefon' => 'required',
        ];
    }
}
