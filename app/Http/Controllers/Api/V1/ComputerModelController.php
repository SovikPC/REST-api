<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComputerModelRequest;
use App\Http\Requests\UpdateComputerModelRequest;
use App\Http\Resources\V1\ComputerModelResource;
use App\Models\ComputerModel;

class ComputerModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ComputerModelResource::collection(ComputerModel::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComputerModelRequest $request)
    {
        $computerModel = ComputerModel::create($request->validated());

        return ComputerModelResource::make($computerModel);
    }

    /**
     * Display the specified resource.
     */
    public function show(ComputerModel $computerModel)
    {
        return ComputerModelResource::make($computerModel);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComputerModelRequest $request, ComputerModel $computerModel)
    {
        $computerModel->update($request->validated());

        return ComputerModelResource::make($computerModel);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ComputerModel $computerModel)
    {
        //
    }
}
