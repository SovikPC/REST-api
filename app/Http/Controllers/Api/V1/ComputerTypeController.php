<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComputerTypeRequest;
use App\Http\Requests\UpdateComputerTypeRequest;
use App\Http\Resources\V1\ComputerTypeResource;
use App\Models\ComputerType;

class ComputerTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ComputerTypeResource::collection(ComputerType::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComputerTypeRequest $request)
    {
        $computerType = ComputerType::create($request->validated());

        return ComputerTypeResource::make($computerType);
    }

    /**
     * Display the specified resource.
     */
    public function show(ComputerType $computerType)
    {
        return ComputerTypeResource::make($computerType);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComputerTypeRequest $request, ComputerType $computerType)
    {
        $computerType->update($request->validated());

        return ComputerTypeResource::make($computerType);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ComputerType $computerType)
    {
        //
    }
}
