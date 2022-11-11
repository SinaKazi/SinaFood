<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class Restaurant extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $this->withoutWrapping();
        return [
            'id'=>$this->id,
            'title'=>$this->name,
            'type'=>$this->type_restaurant,
            'address'=> new Address($this->address),
            'is_open'=>$this->is_open,
            'image'=>$this->url_img,
            'score'=>$this->score,
        ];
    }
}
