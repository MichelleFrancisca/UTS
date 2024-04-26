<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
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
            'id' => $this->id,
            'Code' => $this->Code,
            'Name' => $this->Name,
            'Email' => $this->Email,
            'Phone' => $this->Phone,
            'Mobile' => $this->Mobile,
            'Street' => $this->Street,
            'City' => $this->City,
            'State' => $this->State,
            'Zip' => $this->Zip,
            'Country' => $this->Country,
            'VAT' => $this->VAT,
        ];
    }
}
