<?php

namespace Joinbiz\Data\Models\Common\JoinbizDataCommon\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joinbiz\Data\Models\Common\JoinbizDataCommon\JoinbizDataCommonServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Joinbiz\Data\Models\Common\\DataCommon\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            JoinbizDataCommonServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_data-common_table.php.stub';
        $migration->up();
        */
    }
}
