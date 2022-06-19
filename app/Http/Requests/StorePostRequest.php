<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:20|',
            'species' => 'required|min:3|max:20|',
            'breed' => 'required|min:3|max:20|',
            'age' => 'required|min:1|max:2|',
            'weight' => 'required|min:1|max:3|',
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'The name needs more then 3 characters',
            
         
        ];
    }
}
