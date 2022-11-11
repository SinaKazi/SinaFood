<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class Food extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $this->withoutWrapping();
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'price'=>$this->price,
            'raw_material'=>$this->raw_material,
            'image'=>$this->image
        ];
    }
}
