<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Player extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'image' => $this->resource->image,
            'name' => $this->resource->full_name,
            'score' => $this->resource->score,
            'teams' => $this->resource->teams,
            'birth_date' => $this->resource->birth_date,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
