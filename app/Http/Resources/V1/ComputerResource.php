<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ComputerResource extends JsonResource
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
            'name'=>$this->C_NAME,
            'manufacturer'=>$this->C_MAN,
            'model'=>$this->C_MOD,
            'type'=>$this->C_TYP,
            'inventory'=>$this->C_INV,
            'serial'=>$this->C_SER,
            'responsible'=>$this->C_RES,
            'location'=>$this->C_LOC,
            'state'=>$this->C_STA
        ];
    }
}
