<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateStock extends FormRequest
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
            'symbol' => ['required', 'min:1', 'max:10'],
            'name' => ['nullable', 'max:100'],
            'exchange' => ['nullable', 'max:20'],
            'currency' => ['nullable', 'max:3'],
            'image' => ['nullable', 'image'],
        ];
    }
}


/*----------------------------------------------------------------
'email' => 'required|email|unique:users',
'password' => 'required|confirmed|min:8',
'start_date' => 'required|date|after:tomorrow'
'finish_date' => 'required|date|after:start_date'
'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
*/
