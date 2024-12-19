<?php

namespace Joinbiz\Data;

use Commands\DataCommonCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DataCommonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('data-common')
            ->hasConfigFile()
            ->hasCommand(DataCommonCommand::class);
    }
}
