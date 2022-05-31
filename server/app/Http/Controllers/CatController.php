<?php

namespace App\Http\Controllers;

use App\Http\Resources\CatListCollection;
use App\OpenApi\Parameters\ListCatsParameters;
use App\OpenApi\Responses\ErrorResponse;
use App\OpenApi\Responses\ListCatsResponse;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

#[OpenApi\PathItem]
class CatController extends Controller
{
    // #[OpenApi\Operation('ListCats', ['cats'], 'BearerTokenSecuritySchema', 'GET')]
    #[OpenApi\Operation('ListCats', ['cats'], 'GET')]
    #[OpenApi\Parameters(ListCatsParameters::class)] // parameter設定できるようにしていますが、一旦サンプル的に入れているのみ
    #[OpenApi\Response(ListCatsResponse::class, 200)]
    #[OpenApi\Response(ErrorResponse::class, 400)]
    public function index()
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

    #[OpenApi\Operation('CatCreate', ['cats'], 'POST')]
    #[OpenApi\RequestBody(CreateCatRequestBody::class)]
    #[OpenApi\Response(SuccessResponse::class, 200)]
    #[OpenApi\Response(ErrorResponse::class, 400)]
    public function create()
    {

    }
}

