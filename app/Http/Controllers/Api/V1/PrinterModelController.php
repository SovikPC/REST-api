<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrinterModelRequest;
use App\Http\Requests\UpdatePrinterModelRequest;
use App\Http\Resources\V1\PrinterModelResource;
use App\Models\PrinterModel;

class PrinterModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PrinterModelResource::collection(PrinterModel::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrinterModelRequest $request)
    {
        $printerModel = PrinterModel::create($request->validated());

        return PrinterModelResource::make($printerModel);
    }

    /**
     * Display the specified resource.
     */
    public function show(PrinterModel $printerModel)
    {
        return PrinterModelResource::make($printerModel);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrinterModelRequest $request, PrinterModel $printerModel)
    {
        $printerModel->update($request->validated());

        return PrinterModelResource::make($printerModel);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrinterModel $printerModel)
    {
        //
    }
}
