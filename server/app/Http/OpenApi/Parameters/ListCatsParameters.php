<?php

namespace App\OpenApi\Parameters;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Factories\ParametersFactory;

class ListCatsParameters extends ParametersFactory
{
    public function build(): array
    {
        return [
            Parameter::query()
                ->name('parameter-name')
                ->description('Parameter description')
                ->required(false)
                ->schema(Schema::string())
        ];
    }
}
