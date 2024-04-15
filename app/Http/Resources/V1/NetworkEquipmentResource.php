<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NetworkEquipmentResource extends JsonResource
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
            'name'=>$this->NE_NAME,
            'manufacturer'=>$this->NE_MAN,
            'model'=>$this->NE_MOD,
            'type'=>$this->NE_TYP,
            'inventory'=>$this->NE_INV,
            'serial'=>$this->NE_SER,
            'responsible'=>$this->NE_RES,
            'location'=>$this->NE_LOC,
            'state'=>$this->NE_STA
        ];
    }
}
