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

it('registers the "Classes" alias for the facade', function () {
    expect(class_exists('Classes'))->toBeTrue()
        ->and(is_a('Classes', ClassNamesFacade::class, true))->toBeTrue()
        ->and((string) Classes::make('btn'))->toBe('btn');
});
