<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GradResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'naziv' => $this->resource->naziv,
            'drzava' => $this->resource->drzava,
            'region' => $this->resource->region,
            'postanskiBroj' => $this->resource->postanskiBroj
        ];
    }
}
