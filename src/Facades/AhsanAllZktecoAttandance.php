<?php

namespace Ahsan\AllZktecoAttandance\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ahsan\AllZktecoAttandance\AhsanAllZktecoAttandance
 */
class AhsanAllZktecoAttandance extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ahsan\AllZktecoAttandance\AhsanAllZktecoAttandance::class;
    }
}
