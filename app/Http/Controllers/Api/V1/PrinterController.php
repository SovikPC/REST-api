<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrinterRequest;
use App\Http\Requests\UpdatePrinterRequest;
use App\Http\Resources\V1\PrinterResource;
use App\Models\Printer;

class PrinterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PrinterResource::collection(Printer::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrinterRequest $request)
    {
        $printer = Printer::create($request->validated());

        return PrinterResource::make($printer);
    }

    /**
     * Display the specified resource.
     */
    public function show(Printer $printer)
    {
        return PrinterResource::make($printer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrinterRequest $request, Printer $printer)
    {
        $printer->update($request->validated());

        return PrinterResource::make($printer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Printer $printer)
    {
        //
    }
}
