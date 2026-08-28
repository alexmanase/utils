<?php

namespace AlexManase\Utils;

use AlexManase\Utils\Facades\ClassNamesFacade;
use Illuminate\Foundation\AliasLoader;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class UtilsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('alexmanase-utils');
    }

    public function packageRegistered(): void
    {
        $this->app->singleton(ClassNamesManager::class);

        AliasLoader::getInstance()->alias(
            'Classes',
            ClassNamesFacade::class,
        );
    }
}
