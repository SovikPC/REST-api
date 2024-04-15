<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNetworkEquipmentTypeRequest;
use App\Http\Requests\UpdateNetworkEquipmentTypeRequest;
use App\Http\Resources\V1\NetworkEquipmentTypeResource;
use App\Models\NetworkEquipmentType;

class NetworkEquipmentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return NetworkEquipmentTypeResource::collection(NetworkEquipmentType::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNetworkEquipmentTypeRequest $request)
    {
        $networkEquipmentType = NetworkEquipmentType::create($request->validated());

        return NetworkEquipmentTypeResource::make($networkEquipmentType);
    }

    /**
     * Display the specified resource.
     */
    public function show(NetworkEquipmentType $networkEquipmentType)
    {
        return NetworkEquipmentTypeResource::make($networkEquipmentType);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNetworkEquipmentTypeRequest $request, NetworkEquipmentType $networkEquipmentType)
    {
        $networkEquipmentType->update($request->validated());

        return NetworkEquipmentTypeResource::make($networkEquipmentType);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NetworkEquipmentType $networkEquipmentType)
    {
        //
    }
}
