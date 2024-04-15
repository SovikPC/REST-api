<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMonitorRequest extends FormRequest
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
            'M_NAME' => 'required|string',
            'M_MAN'=>'required|integer',
            'M_MOD'=>'required|integer',
            'M_TYP'=>'required|integer',
            'M_INV'=>'required|integer',
            'M_SER'=>'required|string',
            'M_RES'=>'required|integer',
            'M_LOC'=>'required|integer',
            'M_STA'=>'required|integer'
        ];
    }
}
