<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMonitorModelRequest;
use App\Http\Requests\UpdateMonitorModelRequest;
use App\Http\Resources\V1\MonitorModelResource;
use App\Models\MonitorModel;

class MonitorModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MonitorModelResource::collection(MonitorModel::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMonitorModelRequest $request)
    {
        $monitorModel = MonitorModel::create($request->validated());

        return MonitorModelResource::make($monitorModel);
    }

    /**
     * Display the specified resource.
     */
    public function show(MonitorModel $monitorModel)
    {
        return MonitorModelResource::make($monitorModel);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMonitorModelRequest $request, MonitorModel $monitorModel)
    {
        $monitorModel->update($request->validated());

        return MonitorModelResource::make($monitorModel);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MonitorModel $monitorModel)
    {
        //
    }
}
