<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
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
            "id"            =>  $this->id,
            'PaymentType'   =>  $this->PaymentType,
            'Total'         =>  $this->Total,
            'Paid'          =>  $this->Paid,
            'Rest'          =>  $this->Rest,
            'Rest'          =>  $this->Rest,
            'AccountNumber' =>  $this->acc_number,
        ];
    }
}
