<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegulationClass extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'companyId' => $this->companyId,
            'regulationTypeId' => $this->regulationTypeId,
            'id' => $this->id,
        ];
    }
}
