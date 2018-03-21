<?php namespace October\Rain\Support\Facades;

use October\Rain\Support\Facade;

class Ini extends Facade
{
    /**
     * Get the registered name of the component.
     * 
     * Resolves to:
     *\Rain\Parse\Ini
     * 
     * @return string
     */
    protected static function getFacadeAccessor() { return 'parse.ini'; }
}
