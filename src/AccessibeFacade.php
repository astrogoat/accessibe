<?php

namespace Astrogoat\Accessibe;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Accessibe\Accessibe
 */
class AccessibeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'accessibe';
    }
}
