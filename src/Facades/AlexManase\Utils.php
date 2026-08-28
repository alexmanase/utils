<?php

namespace AlexManase\AlexManase\Utils\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlexManase\AlexManase\Utils\AlexManase\Utils
 */
class AlexManase\Utils extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AlexManase\AlexManase\Utils\AlexManase\Utils::class;
    }
}
