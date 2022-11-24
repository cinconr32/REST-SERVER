<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'nama' => $this->nama,
            'NIK' => $this->nik,
            'jenisKelamin' => $this->jeniskelamin,
            'alamat' => $this->alamat,
            'noTelp' => $this->no_telp,
            'tagihan' => TagihanResource::collection($this->whenLoaded('tagihan'))
        ];
    }
}
