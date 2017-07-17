<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        switch($this->method())
        {
            case 'POST':
            {
                return [
                    'name' => 'max:60|required',
                    'lastname' => 'max:60|required',
                    'dni' => 'digits_between:7,8|numeric|required',
                    'email' => 'email|required|unique:users',
                    'phone' => 'digits_between:6,15|numeric|required',
                    'password' => 'min:6|max:60|required',
                    'type' => 'required',
                ];
            }
            case 'PUT':
                return [
                    'name' => 'max:60|required',
                    'lastname' => 'max:60|required',
                    'dni' => 'digits_between:7,8|numeric|required',
                    'email' => 'email|required|unique:users,email,'. $this->user,
                    'phone' => 'digits_between:6,15|numeric|required',
                    'password' => 'min:6|max:60|required',
                    'type' => 'required',
                ];
            default:break;
        }
    }
}
