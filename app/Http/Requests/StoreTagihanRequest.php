<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTagihanRequest extends FormRequest
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
            'customer_id' => 'required|numeric',
            'jenis' => ['required', Rule::in(['Internet', 'PDAM', 'Listrik'])],
            'jumlah' => 'required|numeric',
            'status' => ['required', Rule::in(['Terbayar', 'Belum Bayar'])],
            'tanggal_bayar' =>'sometimes|required|date'
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'customer_id' => $this->customerId,
        ]);

        if ( $this->tanggalBayar )
        {
            $this->merge([
                'tanggal_bayar' => $this->tanggalBayar,
            ]);
        }
    }
}