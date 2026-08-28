<?php

use AlexManase\Utils\ClassNamesManager;
use AlexManase\Utils\Facades\ClassNames as ClassNamesFacade;
use AlexManase\Utils\Support\ClassBuilder;

it('builds css classes through the facade', function () {
    $result = ClassNamesFacade::make(['btn', 'btn-primary' => true, 'btn-disabled' => false]);

    expect($result)
        ->toBeInstanceOf(ClassBuilder::class)
        ->and((string) $result)->toBe('btn btn-primary');
});


it('builds css classes via ClassNames::make()->add()', function () {
    expect((string) ClassNames::make()->add('btn')->add(['btn-primary' => true, 'btn-disabled' => false]))
        ->toBe('btn btn-primary');
});

it('builds css classes via `ClassNames::add()` directly', function () {
    expect((string) ClassNames::add(['btn', 'btn-primary' => true, 'btn-disabled' => false]))
        ->toBe('btn btn-primary');
});
