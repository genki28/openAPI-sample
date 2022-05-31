<?php

namespace App\Http\Controllers;

use App\OpenApi\Responses\ErrorResponse;
use App\OpenApi\Responses\ListCatsResponse;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

#[OpenApi\PathItem]
class CatController extends Controller
{
    #[OpenApi\Operation(tags: ['cats'], method: 'GET')]
    #[OpenApi\Response(ListCatsResponse::class, 200)]
    #[OpenApi\Response(ErrorResponse::class, 400)]
    public function index()
    {
        return [
            'data' => [
                0 => [
                    'id' => 1,
                    'name' => '猫ちゃん',
                    'birthday' => '2022-02-01'
                ]
            ]
        ];
    }
}

