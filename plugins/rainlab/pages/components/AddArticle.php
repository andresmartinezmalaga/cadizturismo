<?php namespace RainLab\Pages\Components;

use Cms\Classes\ComponentBase;
use RainLab\Pages\Classes\Router;
use RainLab\Pages\Classes\MenuItemReference;
use RainLab\Pages\Classes\Page;
use Cms\Classes\Theme;
use Request;
use Url;
use DateTime;
use Carbon\Carbon;
use Carbon\CarbonInterval;

use Barryvdh\Snappy\Facades\SnappyPdf as PDFS;

use Mail;

use Response;
use File;
use Twig;

/**
 * The static page component.
 *
 * @package rainlab\pages
 * @author Alexey Bobkov, Samuel Georges
 */
class AddArticle extends ComponentBase
{


    /**
     * @var \RainLab\Pages\Classes\Page A reference to the static page object
     */

    public function componentDetails()
    {
        return [
            'name'        => 'AddArticle',
            'description' => 'AddArticle description'
        ];
    }

    public function defineProperties()
    {
        return [
        ];
    }


}