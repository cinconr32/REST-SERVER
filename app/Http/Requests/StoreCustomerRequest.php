<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCustomerRequest extends FormRequest
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
            'nama' => 'required',
            'nik' => 'required|numeric',
            'jeniskelamin' => ['required', Rule::in(['L', 'P'])],
            'alamat' => 'required',
            'no_telp' => 'required'
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'nik' => $this->NIK,
            'jeniskelamin' => $this->jenisKelamin,
            'no_telp' => $this->noTelp
        ]);
    }
}
