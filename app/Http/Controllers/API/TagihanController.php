<?php

namespace App\Http\Controllers\API;

use App\Models\Tagihan;
use Illuminate\Http\Request;
use App\Filters\TagihanFilter;
use App\Http\Controllers\Controller;
use App\Http\Resources\TagihanResource;
use App\Http\Resources\TagihanCollection;
use App\Http\Requests\StoreTagihanRequest;
use App\Http\Requests\UpdateTagihanRequest;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new TagihanFilter();
        $queryItems = $filter->transform($request);

        if (count($queryItems) == 0) {
            return new TagihanCollection(Tagihan::all());
        } else {
            return new TagihanCollection(Tagihan::where($queryItems)->get());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagihanRequest $request)
    {
        return new TagihanResource(Tagihan::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function show(Tagihan $tagihan)
    {
        return new TagihanResource($tagihan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagihanRequest $request, Tagihan $tagihan)
    {
        $tagihan->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tagihan $tagihan)
    {
        $tagihan->delete();
    }
}
