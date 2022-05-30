<?php

namespace App\OpenApi\Schemas;

use GoldSpecDigital\ObjectOrientedOAS\Contracts\SchemaContract;
use Vyuldashev\LaravelOpenApi\Contracts\Reusable;
use Vyuldashev\LaravelOpenApi\Factories\SchemaFactory;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

class CreateCatsParameterSchema extends SchemaFactory implements Reusable
{
    public function build(): SchemaContract
    {
        // 一覧系でbodyがあり、そのうち
        return Schema::object('ListCatsParameter')
            ->properties(
                Schema::string('name')->example('猫ちゃん'),
                Schema::string('birthday')->example('2015-07-01')
            )->required(
                'birthday'
            );
    }
}
