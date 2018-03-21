<?php namespace Cms\Helpers;

use Url;
use Route;

/**
 * CMS Helper
 *
 *
 * @see \Cms\Facades\Cms
 *
 */
class Cms
{
    protected static $actionExists = null;

    /**
     * Returns a URL in context of the Frontend
     */
    public function url($path = null)
    {
        $routeAction = 'Cms\Classes\CmsController@run';

        if (self::$actionExists === null) {
            self::$actionExists = Route::getRoutes()->getByAction($routeAction) !== null;
        }

        if (substr($path, 0, 1) == '/') {
            $path = substr($path, 1);
        }

        if (self::$actionExists) {
            return Url::action($routeAction, ['slug' => $path]);
        }
        else {
            return Url::to($path);
        }
    }
}
