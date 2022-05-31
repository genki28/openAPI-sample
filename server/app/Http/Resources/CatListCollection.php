<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CatListCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => [
                0 => [
                    'id' => 1,
                    'name' => '猫ちゃん'
                ]
            ]
        ];
    }
}

