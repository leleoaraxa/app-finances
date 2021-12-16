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
            'symbol' => ['required', 'string', 'min:1', 'max:10'],
            'name' => ['required', 'string', 'min:1', 'max:100'],
            'exchange' => ['required', 'string', 'min:1', 'max:20'],
            'currency' => ['required', 'string', 'min:1', 'max:10'],
            'datetime' => ['required', 'date'],
            'open' => ['required', 'numeric'],
            'high' => ['required', 'numeric'],
            'low' => ['required', 'numeric'],
            'close' => ['required', 'numeric'],
            'volume' => ['required', 'numeric'],
            'previous_close' => ['required', 'numeric'],
            'change' => ['required', 'numeric'],
            'average_volume' => ['required', 'numeric'],
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
