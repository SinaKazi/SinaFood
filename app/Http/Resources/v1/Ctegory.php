<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class Ctegory extends JsonResource
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
            'categories'=>[
                'id'=>$this->id,
                'title'=>$this->name,
                'foods'=> Food::collection($this->foods),
            ]
        ];
    }
}
