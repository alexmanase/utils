<?php

use AlexManase\Utils\ClassNamesManager;
use AlexManase\Utils\Facades\ClassNamesFacade;
use AlexManase\Utils\Support\ClassBuilder;

it('resolves the class names manager as a singleton from the container', function () {
    expect(app(ClassNamesManager::class))
        ->toBeInstanceOf(ClassNamesManager::class)
        ->and(app(ClassNamesManager::class))->toBe(app(ClassNamesManager::class));
});

it('resolves the underlying manager behind the facade', function () {
    expect(ClassNamesFacade::getFacadeRoot())->toBeInstanceOf(ClassNamesManager::class);
});

it('builds css classes through the facade', function () {
    $result = ClassNamesFacade::make(['btn', 'btn-primary' => true, 'btn-disabled' => false]);

    expect($result)
        ->toBeInstanceOf(ClassBuilder::class)
        ->and((string) $result)->toBe('btn btn-primary');
});

it('registers the "ClassNames" alias for the facade', function () {
    expect(class_exists('ClassNames'))->toBeTrue()
        ->and(is_a('ClassNames', ClassNamesFacade::class, true))->toBeTrue()
        ->and((string) ClassNames::make('btn'))->toBe('btn');
});

it('builds css classes via ClassNames::make()->add()', function () {
    expect((string) ClassNames::make()->add('btn')->add(['btn-primary' => true, 'btn-disabled' => false]))
        ->toBe('btn btn-primary');
});

it('builds css classes via ClassNames::add() directly', function () {
    expect((string) ClassNames::add(['btn', 'btn-primary' => true, 'btn-disabled' => false]))
        ->toBe('btn btn-primary');
});
