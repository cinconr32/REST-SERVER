<?php

namespace App\Filters;

use App\Filters\ApiFilter;

class CustomerFilter extends ApiFilter {
    protected $safeParms = [
        'id' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'nama' => ['eq'],
        'NIK' => ['eq'],
        'jenisKelamin' => ['eq'],
        'alamat' => ['eq'],
        'noTelp' => ['eq']
    ];

    protected $columnMap = [
        'NIK' => 'nik',
        'jenisKelamin' => 'jeniskelamin',
        'noTelp' => 'no_telp'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '≤',
        'gt' => '>',
        'gte' => '≥'
    ];
}