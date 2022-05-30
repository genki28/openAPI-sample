<?php

namespace App\OpenApi\Responses;

use App\OpenApi\Schemas\CatSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class ListCatsResponse extends ResponseFactory
{
    public function build(): Response
    {
        $response = Schema::object()->title('ListCatsResponse')->properties(
            Schema::array('data')->items(
                CatSchema::ref()
            )
        );
        return Response::ok()->description('Successful response')
            ->content(MediaType::json()->schema($response));
    }
}
