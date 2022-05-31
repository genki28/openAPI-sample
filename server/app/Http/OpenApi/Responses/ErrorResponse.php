<?php

namespace App\OpenApi\Responses;

use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class ErrorResponse extends ResponseFactory
{
    public function build(): Response
    {
        $response = Schema::object()->title('ErrorResponse')->properties(
            Schema::string('message')->example("Bad Request")
        )->required(
            'message'
        );
        return Response::badRequest()->description('Bad Request')
            ->content(MediaType::json()->schema($response));
    }
}
