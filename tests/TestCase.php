<?php

namespace Joinbiz\Data\Models\Common\JoinbizDataCommon\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joinbiz\Data\Models\Common\DataCommonServiceProvider;
use Joinbiz\Data\Models\Common\JoinbizDataCommon\JoinbizDataCommonServiceProvider;
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
            DataCommonServiceProvider::class,
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
