<?php

namespace AlexManase\Utils\Facades;

use AlexManase\Utils\ClassNamesManager;
use Illuminate\Support\Facades\Facade;

class ClassNames extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ClassNamesManager::class;
    }
}
