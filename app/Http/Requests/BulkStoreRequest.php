<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class BulkStoreRequest extends FormRequest
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
            '*.customer_id' => 'required|integer',
            '*.jenis' => ['required', Rule::in(['Internet', 'PDAM', 'Listrik'])],
            '*.jumlah' => 'required|numeric',
            '*.status' => ['required', Rule::in(['Terbayar', 'Belum Bayar'])],
            '*.tanggal_bayar' =>'date|nullable'
        ];
    }

    protected function prepareForValidation()
    {
        $data = [];
        $date = now();

        foreach ( $this->toArray() as $obj )
        {
            $obj['customer_id'] = $obj['customerId'] ?? null;
            $obj['tanggal_bayar'] = $obj['tanggalBayar'] ?? null;
            $obj['created_at'] = $date;
            $obj['updated_at'] = $date;

            $data[] = $obj;
        }

        $this->merge($data);
    }
}
