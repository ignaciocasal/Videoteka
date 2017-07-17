<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenreRequest extends FormRequest
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
                    'name' => 'max:20|required|unique:genres',
                ];
            }
            case 'PUT':
                return [
                    'name' => 'max:20|required|unique:genres,name,'. $this->genre,
                ];
            default:break;
        }
    }
}
