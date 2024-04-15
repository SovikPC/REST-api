<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMonitorTypeRequest;
use App\Http\Requests\UpdateMonitorTypeRequest;
use App\Http\Resources\V1\MonitorTypeResource;
use App\Models\MonitorType;

class MonitorTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MonitorTypeResource::collection(MonitorType::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMonitorTypeRequest $request)
    {
        $monitorType = MonitorType::create($request->validated());

        return MonitorTypeResource::make($monitorType);
    }

    /**
     * Display the specified resource.
     */
    public function show(MonitorType $monitorType)
    {
        return MonitorTypeResource::make($monitorType);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMonitorTypeRequest $request, MonitorType $monitorType)
    {
        $monitorType->update($request->validated());

        return MonitorTypeResource::make($monitorType);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MonitorType $monitorType)
    {
        //
    }
}
