<?php

namespace Joinbiz\Data\Models\Common\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Joinbiz\Data\Models\Common\JoinbizDataCommon
 */
class JoinbizDataCommon extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Joinbiz\Data\Models\Common\JoinbizDataCommon::class;
    }
}
