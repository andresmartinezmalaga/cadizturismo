<?php namespace October\Rain\Extension;

/**
 * Extension class
 * Allows for "Private traits"
 *
 * \extension
 *
 */

class ExtensionBase
{
    use ExtensionTrait;

    public static function extend(callable $callback)
    {
        self::extensionExtendCallback($callback);
    }
}