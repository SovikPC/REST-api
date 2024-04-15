<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrinterTypeRequest;
use App\Http\Requests\UpdatePrinterTypeRequest;
use App\Http\Resources\V1\PrinterTypeResource;
use App\Models\PrinterType;

class PrinterTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PrinterTypeResource::collection(PrinterType::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrinterTypeRequest $request)
    {
        $printerType = PrinterType::create($request->validated());

        return PrinterTypeResource::make($printerType);
    }

    /**
     * Display the specified resource.
     */
    public function show(PrinterType $printerType)
    {
        return PrinterTypeResource::make($printerType);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrinterTypeRequest $request, PrinterType $printerType)
    {
        $printerType->update($request->validated());

        return PrinterTypeResource::make($printerType);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrinterType $printerType)
    {
        //
    }
}
