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

    public function rules()
    {
        // Rules for both Create and Update operations
        $rules = [
            'Name' => 'required|string|max:100',
            'Email' => 'required|string|email|max:100',
            'Phone' => 'required|string|max:20',
            'Mobile' => 'required|string|max:20',
            'Street' => 'nullable|string',
            'City' => 'nullable|string',
            'State' => 'nullable|string',
            'Zip' => 'nullable|string',
            'Country' => 'nullable|string',
            'VAT' => 'nullable|string',
        ];

        // For Create operation, add additional rules
        if ($this->isMethod('post')) {
            $rules['Code'] = 'required|string|unique:contacts,Code|max:10';
        }

        return $rules;
    }
}
