<?php namespace October\Rain\Support\Facades;

use October\Rain\Support\Facade;

/**
 * Network Http Facade
 *
 * \support
 *
 */
class Http extends Facade
{
    /**
     * Get the registered name of the component.
     * 
     * Resolves to:
     *\Rain\Network\Http
     * 
     * @return string
     */
    protected static function getFacadeAccessor() { return 'network.http'; }
}
