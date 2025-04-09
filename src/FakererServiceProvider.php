<?php

declare(strict_types=1);

namespace Jphat\Fakerer;

use Jphat\Fakerer\Commands\FakererCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FakererServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('fakerer')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_fakerer_table')
            ->hasCommand(FakererCommand::class);
    }

    public function packageRegistered(): void
    {
        // Register the Fakerer class as a singleton
        $this->app->singleton(Fakerer::class, function ($app) {
            return new Fakerer;
        });
    }

    public function packageBooted(): void
    {
        // Make sure our helper functions are loaded
        $this->loadHelpers();
    }

    protected function loadHelpers(): void
    {
        require_once __DIR__.'/Helpers.php';
    }
}
