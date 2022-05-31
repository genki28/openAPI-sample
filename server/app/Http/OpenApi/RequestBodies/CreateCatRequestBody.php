<?php

namespace App\OpenApi\RequestBodies;

use App\OpenApi\Schemas\CreateCatsParameterSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\RequestBody;
use Vyuldashev\LaravelOpenApi\Factories\RequestBodyFactory;

class CreateCatRequestBody extends RequestBodyFactory
{
    public function build(): RequestBody
    {
        return RequestBody::create('CreateCat')
            ->description('猫作成')
            ->content(MediaType::json()->schema(CreateCatsParameterSchema::ref()));
    }
}

