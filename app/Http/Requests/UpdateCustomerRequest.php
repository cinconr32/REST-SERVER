<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();

        return $user !== null && $user->tokenCan('update');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $method = $this->method();

        if ( $method == ('PUT') )
        {
            return [
                'nama' => 'required',
                'nik' => 'required|numeric',
                'jeniskelamin' => ['required', Rule::in(['L', 'P',])],
                'alamat' => 'required',
                'no_telp' => 'required'
            ];
        } else
        {
            return [
                'nama' => 'sometimes|required',
                'nik' => 'sometimes|required|numeric',
                'jeniskelamin' => ['sometimes', 'required', Rule::in(['L', 'P',])],
                'alamat' => 'sometimes|required',
                'no_telp' => 'sometimes|required'
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ( $this->NIK )
        {
            $this->merge([
                'nik' => $this->NIK
            ]);
        } 
        if ( $this->jenisKelamin )
        {
            $this->merge([
                'jeniskelamin' => $this->jenisKelamin
            ]);
        }
        if ( $this->noTelp )
        {
            $this->merge([
                'no_telp' => $this->noTelp
            ]);
        }
    }
}
