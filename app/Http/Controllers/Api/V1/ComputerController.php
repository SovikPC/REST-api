<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComputerRequest;
use App\Http\Requests\UpdateComputerRequest;
use App\Models\Computer;
use App\Http\Resources\V1\ComputerResource;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ComputerResource::collection(Computer::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComputerRequest $request)
    {
        $computer = Computer::create($request->validated());

        return ComputerResource::make($computer);
    }

    /**
     * Display the specified resource.
     */
    public function show(Computer $computer)
    {
        return ComputerResource::make($computer);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComputerRequest $request, Computer $computer)
    {
        $computer->update($request->validated());

        return ComputerResource::make($computer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer)
    {
        //
    }
}
