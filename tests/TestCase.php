<?php

namespace AlexManase\Utils\Tests;

use AlexManase\Utils\UtilsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            UtilsServiceProvider::class,
        ];
    }
}
