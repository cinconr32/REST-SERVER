<?php

namespace App\Http\Controllers\API;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerCollection;
use App\Http\Resources\CustomerResource;
use App\Filters\CustomerFilter;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $filter = new CustomerFilter();
        // $filterItems = $filter->transform($request);

        // $includeTagihan = $request->query('includeTagihan');

        // $customers = Customer::where($filterItems)->get();

        // if ( $includeTagihan ) {
        //     $customers = $customers->with('tagihan');
        // }

        // return new CustomerCollection($customers);

        $filter = new CustomerFilter();
        $filterItems = $filter->transform($request);
        $includeTagihan = $request->query('includeTagihan');

        if (count($filterItems) == 0) {
            if ( $includeTagihan ) {
                return new CustomerCollection(Customer::with(['tagihan'])->get());
            } else {
                return new CustomerCollection(Customer::all());
            }
        } else {
            if ( $includeTagihan ) {
                return new CustomerCollection(Customer::where($filterItems)->with(['tagihan'])->get());
            }
            else {
                return new CustomerCollection(Customer::where($filterItems)->get());
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return new CustomerResource($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
