<?php

namespace Jphat\Fakerer\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Jphat\Fakerer\FakererServiceProvider;

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

    public function getEnvironmentSetUp($app)
    {
    }
}
