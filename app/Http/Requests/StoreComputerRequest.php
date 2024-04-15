<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComputerRequest extends FormRequest
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
            'C_NAME' => 'required|string',
            'C_MAN'=>'required|integer',
            'C_MOD'=>'required|integer',
            'C_TYP'=>'required|integer',
            'C_INV'=>'required|integer',
            'C_SER'=>'required|string',
            'C_RES'=>'required|integer',
            'C_LOC'=>'required|integer',
            'C_STA'=>'required|integer'
        ];
    }
}
