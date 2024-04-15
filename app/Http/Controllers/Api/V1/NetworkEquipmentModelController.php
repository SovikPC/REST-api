<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNetworkEquipmentModelRequest;
use App\Http\Requests\UpdateNetworkEquipmentModelRequest;
use App\Http\Resources\V1\NetworkEquipmentModelResource;
use App\Models\NetworkEquipmentModel;

class NetworkEquipmentModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return NetworkEquipmentModelResource::collection(NetworkEquipmentModel::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNetworkEquipmentModelRequest $request)
    {
        $networkEquipmentModel = NetworkEquipmentModel::create($request->validated());

        return NetworkEquipmentModelResource::make($networkEquipmentModel);
    }

    /**
     * Display the specified resource.
     */
    public function show(NetworkEquipmentModel $networkEquipmentModel)
    {
        return NetworkEquipmentModelResource::make($networkEquipmentModel);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNetworkEquipmentModelRequest $request, NetworkEquipmentModel $networkEquipmentModel)
    {
        $networkEquipmentModel->update($request->validated());

        return NetworkEquipmentModelResource::make($networkEquipmentModel);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NetworkEquipmentModel $networkEquipmentModel)
    {
        //
    }
}
