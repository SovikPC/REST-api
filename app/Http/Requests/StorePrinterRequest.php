<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrinterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'P_NAME' => 'required|string',
            'P_MAN'=>'required|integer',
            'P_MOD'=>'required|integer',
            'P_TYP'=>'required|integer',
            'P_INV'=>'required|integer',
            'P_SER'=>'required|string',
            'P_RES'=>'required|integer',
            'P_LOC'=>'required|integer',
            'P_STA'=>'required|integer'
        ];
    }
}
