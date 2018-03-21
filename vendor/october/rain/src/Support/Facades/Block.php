<?php namespace October\Rain\Support\Facades;

use October\Rain\Support\Facade;

/**
 * Http Block Facade
 *
 * \support
 *
 */
class Block extends Facade
{
    /**
     * Get the registered name of the component.
     * 
     * Resolves to:
     *\Rain\Html\BlockBuilder
     * 
     * @return string
     */
    protected static function getFacadeAccessor() { return 'block'; }
}
