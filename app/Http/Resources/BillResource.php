<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BillResource extends JsonResource
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
            'id'            =>  $this->id,
            'branch'        =>  $this->branch,
            'products'      =>  $this->products,
            'buying'        =>  $this->products->sum('buying_price'),
            'total'         =>  $this->products->sum('selling_price'),
            'rest'          =>  $this->paid - $this->products->sum('buying_price'),
            'paid'          =>  $this->paid,
            'lose'          =>  $this->products->sum('buying_price') - $this->paid,
        ];
    }
}
