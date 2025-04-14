<?php

namespace Jphat\Fakerer\Tests;

use Jphat\Fakerer\FakererServiceProvider;
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
            FakererServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app) {}
}
