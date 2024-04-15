<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PrinterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->P_NAME,
            'manufacturer'=>$this->P_MAN,
            'model'=>$this->P_MOD,
            'type'=>$this->P_TYP,
            'inventory'=>$this->P_INV,
            'serial'=>$this->P_SER,
            'responsible'=>$this->P_RES,
            'location'=>$this->P_LOC,
            'state'=>$this->P_STA
        ];
    }
}
