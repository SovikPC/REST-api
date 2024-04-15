<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreManufacturerRequest;
use App\Http\Requests\UpdateManufacturerRequest;
use App\Http\Resources\V1\ManufacturerResource;
use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ManufacturerResource::collection(Manufacturer::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreManufacturerRequest $request)
    {
        $manufacturer = Manufacturer::create($request->validated());

        return ManufacturerResource::make($manufacturer);
    }

    /**
     * Display the specified resource.
     */
    public function show(Manufacturer $manufacturer)
    {
        return ManufacturerResource::make($manufacturer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateManufacturerRequest $request, Manufacturer $manufacturer)
    {
        $manufacturer->update($request->validated());

        return ManufacturerResource::make($manufacturer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manufacturer $manufacturer)
    {
        //
    }
}
