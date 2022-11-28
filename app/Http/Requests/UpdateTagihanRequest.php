<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTagihanRequest extends FormRequest
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
    
    public function rules()
    {
        $method = $this->method();

        if ( $method == ('PUT') )
        {
            return [
                'customer_id' => 'required|integer',
                'jenis' => ['required', Rule::in(['Internet', 'PDAM', 'Listrik'])],
                'jumlah' => 'required|numeric',
                'status' => ['required', Rule::in(['Terbayar', 'Belum Bayar'])],
                'tanggal_bayar' =>'date|nullable'
            ];
        } else
        {
            return [
                'customer_id' => 'sometimes|required|integer',
                'jenis' => ['sometimes','required', Rule::in(['Internet', 'PDAM', 'Listrik'])],
                'jumlah' => 'sometimes|required|numeric',
                'status' => ['sometimes', 'required', Rule::in(['Terbayar', 'Belum Bayar'])],
                'tanggal_bayar' =>'sometimes|date|nullable'
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ( $this->customerId )
        {
            $this->merge([
                'customer_id' => $this->customerId
            ]);
        } 
        if ( $this->tanggalBayar )
        {
            $this->merge([
                'tanggal_bayar' => $this->tanggalBayar
            ]);
        }
    }
}
