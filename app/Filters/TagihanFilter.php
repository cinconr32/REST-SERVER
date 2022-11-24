<?php

namespace App\Filters;

use App\Filters\ApiFilter;

class TagihanFilter extends ApiFilter {
    protected $safeParms = [
        'id' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'customerId' => ['eq'],
        'jenis' => ['eq'],
        'jumlah' => ['eq'],
        'status' => ['eq'],
        'tanggalBayar' => ['eq', 'lt', 'lte', 'gt', 'gte']
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'tanggalBayar' => 'tanggal_bayar'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '≤',
        'gt' => '>',
        'gte' => '≥'
    ];
}