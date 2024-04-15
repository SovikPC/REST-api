<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNetworkEquipmentRequest;
use App\Http\Requests\UpdateNetworkEquipmentRequest;
use App\Http\Resources\V1\NetworkEquipmentResource;
use App\Models\NetworkEquipment;

class NetworkEquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return NetworkEquipmentResource::collection(NetworkEquipment::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNetworkEquipmentRequest $request)
    {
        $networkEquipment = NetworkEquipment::create($request->validated());

        return NetworkEquipmentResource::make($networkEquipment);
    }

    /**
     * Display the specified resource.
     */
    public function show(NetworkEquipment $networkEquipment)
    {
        return NetworkEquipmentResource::make($networkEquipment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNetworkEquipmentRequest $request, NetworkEquipment $networkEquipment)
    {
        $networkEquipment->update($request->validated());

        return NetworkEquipmentResource::make($networkEquipment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NetworkEquipment $networkEquipment)
    {
        //
    }
}
