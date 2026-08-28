<?php

namespace AlexManase\AlexManase\Utils;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AlexManase\AlexManase\Utils\Commands\AlexManase\UtilsCommand;

class AlexManase\UtilsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('utils')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_utils_table')
            ->hasCommand(AlexManase\UtilsCommand::class);
    }
}
