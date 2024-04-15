<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMonitorRequest;
use App\Http\Requests\UpdateMonitorRequest;
use App\Http\Resources\V1\MonitorResource;
use App\Models\Monitor;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MonitorResource::collection(Monitor::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMonitorRequest $request)
    {
        $monitor = Monitor::create($request->validated());

        return MonitorResource::make($monitor);
    }

    /**
     * Display the specified resource.
     */
    public function show(Monitor $monitor)
    {
        return MonitorResource::make($monitor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMonitorRequest $request, Monitor $monitor)
    {
        $monitor->update($request->validated());

        return MonitorResource::make($monitor);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Monitor $monitor)
    {
        //
    }
}
