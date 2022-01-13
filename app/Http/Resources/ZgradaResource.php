<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZgradaResource extends JsonResource
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
            'Ulica' => $this->resource->ulica,
            'Broj stanova' => $this->resource->brojStanova,
            'Broj spratova' => $this->resource->brojSpratova,
            'Predsednik skupstine stanara' => $this->resource->predsednik,
            'Email' => $this->resource->email,
            'Grad' => new GradResource($this->resource->grad)
        ];
    }
}
