<?php

namespace AbdulmatinSanni\APIx\Facades;

use Illuminate\Support\Facades\Facade;

class APIxFacade extends Facade
{
    /**
     * @return string
     * Gets the registered name of the package
     */
    protected static function getFacadeAccessor()
    {
        return 'api-x';
    }
}
