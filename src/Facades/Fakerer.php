<?php

declare(strict_types=1);

namespace Jphat\Fakerer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jphat\Fakerer\Fakerer
 */
class Fakerer extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Jphat\Fakerer\Fakerer::class;
    }
}
