<?php

namespace App\OpenApi\Responses;

use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class SuccessResponse extends ResponseFactory
{
    public function build(): Response
    {
        $response = Schema::object()->title('SuccessResponse')->properties(
            Schema::boolean('result')->example(true)
        );

        return Response::ok()
            ->description('Successful response')
            ->content(
                MediaType::json()->schema($response)
            );
    }
}
