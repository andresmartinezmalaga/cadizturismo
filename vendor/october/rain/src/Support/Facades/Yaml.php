<?php namespace October\Rain\Support\Facades;

use October\Rain\Support\Facade;

class Yaml extends Facade
{
    /**
     * Get the registered name of the component.
     * 
     * Resolves to:
     *\Rain\Parse\Yaml
     * 
     * @return string
     */
    protected static function getFacadeAccessor() { return 'parse.yaml'; }
}
