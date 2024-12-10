<?php

namespace Joinbiz\Data\Models\Common;

use Joinbiz\Data\Models\Common\Commands\JoinbizDataCommonCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class JoinbizDataCommonServiceProvider extends PackageServiceProvider
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
            ->hasViews()
            ->hasMigration('create_data_common_table')
            ->hasCommand(JoinbizDataCommonCommand::class);
    }
}
