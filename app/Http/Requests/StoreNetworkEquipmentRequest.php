<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNetworkEquipmentRequest extends FormRequest
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
            'NE_NAME' => 'required|string',
            'NE_MAN'=>'required|integer',
            'NE_MOD'=>'required|integer',
            'NE_TYP'=>'required|integer',
            'NE_INV'=>'required|integer',
            'NE_SER'=>'required|string',
            'NE_RES'=>'required|integer',
            'NE_LOC'=>'required|integer',
            'NE_STA'=>'required|integer'
        ];
    }
}
