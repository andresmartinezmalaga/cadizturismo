<?php namespace Cms\Classes;

use System\Classes\MediaLibrary as SystemMediaLibrary;

/**
 * Provides abstraction level for the Media Library operations.
 * Implements the library caching features and security checks.
 *
 *
 *
 * @deprecated Use System\Classes\MediaLibrary. Remove if year >= 2020.
 */
class MediaLibrary extends SystemMediaLibrary
{
    /**
     * Initialize this singleton.
     */
    protected function init()
    {
        traceLog('Class Cms\Classes\MediaLibrary has been deprecated, use System\Classes\MediaLibrary instead.');
        parent::init();
    }
}
