<?php

namespace App\OpenApi\Parameters;

class ListCatsParameters extends ParameterFactory
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