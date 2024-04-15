<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MonitorResource extends JsonResource
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
            'name'=>$this->M_NAME,
            'manufacturer'=>$this->M_MAN,
            'model'=>$this->M_MOD,
            'type'=>$this->M_TYP,
            'inventory'=>$this->M_INV,
            'serial'=>$this->M_SER,
            'responsible'=>$this->M_RES,
            'location'=>$this->M_LOC,
            'state'=>$this->M_STA
        ];
    }
}
