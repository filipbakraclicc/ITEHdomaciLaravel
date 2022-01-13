<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StanarResource extends JsonResource
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
            'ID' => $this->resource->id,
            'Ime' => $this->resource->ime,
            'Prezime' => $this->resource->prezime,
            'JMBG' => $this->resource->jmbg,
            'Broj stana' => $this->resource->brojStana,
            'Zgrada' => new ZgradaResource($this->resource->zgrada)
        ];
    }
}
