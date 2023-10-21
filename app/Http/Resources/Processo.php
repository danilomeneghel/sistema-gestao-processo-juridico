<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Processo extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'id_cliente' => $this->id_cliente,
            'nro_processo' => $this->nro_processo,
            'data_distribuicao' => $this->data_distribuicao,
            'valor_causa'=> $this->valor_causa,
            'vara'=> $this->vara,
            'cidade'=> $this->cidade,
            'uf'=> $this->uf
        ];
    }
}
