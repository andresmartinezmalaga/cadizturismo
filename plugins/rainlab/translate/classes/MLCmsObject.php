<?php namespace RainLab\Translate\Classes;

use Cms\Classes\CmsCompoundObject;
use RainLab\Pages\Classes\Page as PageBase;
use Cms\Classes\Theme;

/**
 * Represents a multi-lingual CMS compound object.
 *
 * @package rainlab\translate
 * @author Alexey Bobkov, Samuel Georges
 */
class MLCmsObject extends CmsCompoundObject
{
    /**
     * @var array The attributes that are mass assignable.
     */
    protected $fillable = [];

    public static $locale;

    public static $parent;

    public static function setContext($locale, $parent)
    {
        static::$locale = $locale;
        static::$parent = $parent;
    }

    public static function forLocale($locale, $page)
    {
        static::setContext($locale, $page);

        return static::inTheme($page->theme);
    }

    public static function findLocale($locale, $page)
    {
        /*$theme = Theme::getActiveTheme();
        $pages = PageBase::listInTheme($theme, false);
        $list =  new \Illuminate\Support\Collection($pages);*/

        //$locale = 'en';
        //$page = $list->where("is_hidden",0)->where('url','/comarcas/la-janda')->values();

        echo json_encode(static::forLocale($locale, $page)->find($page->fileName));
        die(1);
        return static::forLocale($locale, $page)->find($page->fileName);
    }

    /**
     * Returns the directory name corresponding to the object type.
     * For pages the directory name is "pages", for layouts - "layouts", etc.
     * @return string
     */
    public function getObjectTypeDirName()
    {
        $dirName = static::$parent->getObjectTypeDirName();

        if (strlen(static::$locale)) {
            $dirName .= '-' . static::$locale;
        }

        return $dirName;
    }
}
