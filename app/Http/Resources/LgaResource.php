<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LgaResource extends JsonResource
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
            'alias' => $this->alias,
            'latitude' => $this->lat,
            'longitude' => $this->lon,
        ];
    }
}