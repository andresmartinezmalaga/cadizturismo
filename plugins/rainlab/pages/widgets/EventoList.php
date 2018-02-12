<?php namespace RainLab\Pages\Widgets;

use Str;
use Lang;
use Input;
use Request;
use Response;
use Backend\Classes\WidgetBase;
use RainLab\Pages\Classes\EventoList as StaticPageList;
use Cms\Classes\Theme;
use DateTime;
use Carbon\Carbon;
use Carbon\CarbonInterval;

use RainLab\Pages\Classes\Page;
use RainLab\Pages\Classes\EventoList as MEventoList;

use RainLab\Pages\Classes\Evento;
use Flash;
/**
 * Static page list widget.
 *
 * @package rainlab\pages
 * @author Alexey Bobkov, Samuel Georges
 */
class EventoList extends WidgetBase
{
    use \Backend\Traits\SearchableWidget;
    use \Backend\Traits\CollapsableWidget;
    use \Backend\Traits\SelectableWidget;

    protected $theme;

    protected $dataIdPrefix;
    public $tpe;
    public $activeMenuFilter = 'all';

    /**
     * @var string Message to display when the Delete button is clicked.
     */
    public $deleteConfirmation = 'rainlab.pages::lang.page.delete_confirmation';

    public $noRecordsMessage = 'rainlab.pages::lang.page.no_records';
    
    public $addSubpageLabel = 'rainlab.pages::lang.page.add_subpage';


    public function __construct($controller, $alias)
    {
        $this->alias = $alias;
        $this->theme = Theme::getEditTheme();
        
        // Andrés Martinez : change prefix page to event
        //$this->dataIdPrefix = 'page-'.$this->theme->getDirName();
        $this->dataIdPrefix = 'evento-'.$this->theme->getDirName();
      
        parent::__construct($controller, []);
        $this->bindToController();
        $this->tpe = 1;
  
    }

    /**
     * Renders the widget.
     * @return string
     */
    public function render()
    {
        return $this->makePartial('body', [
            'data' => $this->getData()
        ]);
    }

    /*
     * Event handlers
     */

    public function onReorder()
    {
        $structure = json_decode(Input::get('structure'), true);
        if (!$structure) {
            throw new SystemException('Invalid structure data posted.');
        }

        $pageList = new StaticPageList($this->theme);
        $pageList->updateStructure($structure);
    }

    public function onUpdate()
    {
        $this->extendSelection();

        return $this->updateList();
    }

    public function onSearch()
    {
        $this->setSearchTerm(Input::get('search'));
        $this->extendSelection();

        return $this->updateList();
    }

    public function onAllEvents()
    {
        return ['#'.$this->getId('page-list') => $this->makePartial('items', ['items' => $this->getData()])];
    }


    public function onOpenEvents()
    {
        return ['#'.$this->getId('page-list') => $this->makePartial('items', ['items' => $this->getDataOpen()])];
    }


    public function onClosedEvents()
    {
        return ['#'.$this->getId('page-list') => $this->makePartial('items', ['items' => $this->getDataClosed()])];
    }
    /*
     * Methods for th internal use
     */

    protected function getData()
    {
        $pageList = new StaticPageList($this->theme);
        $pages = $pageList->getPageTree(true);
        $this->activeMenuFilter = 'all';

        // Andrés Martínez : get only events pages to list at treebranch
        $events = collect();
        foreach ($pages as $i) {
           if($i->page->template == 'eventos'){
                $i->date_start = (new DateTime($i->page->date_start))->format('Y-m-d');
                $i->date_start_pretty_num = (new DateTime($i->page->date_start))->format('d.m.y');
                $events->push($i);
           }
        }
       
        $pages = $events->values();

        $searchTerm = Str::lower($this->getSearchTerm());

        if (strlen($searchTerm)) {
            $words = explode(' ', $searchTerm);

            $iterator = function($pages) use (&$iterator, $words) {
                $result = [];

                foreach ($pages as $page) {
                    if ($this->textMatchesSearch($words, $this->subtreeToText($page))) {
                        $result[] = (object) [
                            'page'     => $page->page,
                            'subpages' => $iterator($page->subpages)
                        ];
                    }
                }

                return $result;
            };

            $pages = $iterator($pages);
        }

        return $pages;
    }

    protected function getDataOpen()
    {
        $now = Carbon::now()->format('Y-m-d');

        $this->activeMenuFilter = 'open';

        $pageList = new StaticPageList($this->theme);
        $pages = $pageList->getPageTree(true);

        // Andrés Martínez : get only events pages to list at treebranch
        $events = collect();
        foreach ($pages as $i) {
           if($i->page->template == 'eventos'){
                $i->date_end = (new DateTime($i->page->date_end))->format('Y-m-d');
                $i->date_start_pretty_num = (new DateTime($i->page->date_start))->format('d.m.y');
                
                if($i->date_end >= $now){
                    $events->push($i);
                }
                
           }
        }
       
        $pages = $events->values();

        $searchTerm = Str::lower($this->getSearchTerm());

        if (strlen($searchTerm)) {
            $words = explode(' ', $searchTerm);

            $iterator = function($pages) use (&$iterator, $words) {
                $result = [];

                foreach ($pages as $page) {
                    if ($this->textMatchesSearch($words, $this->subtreeToText($page))) {
                        $result[] = (object) [
                            'page'     => $page->page,
                            'subpages' => $iterator($page->subpages)
                        ];
                    }
                }

                return $result;
            };

            $pages = $iterator($pages);
        }

        return $pages;
    }

    protected function getDataClosed()
    {
        $now = Carbon::now()->format('Y-m-d');
        
        $this->activeMenuFilter = 'closed';

        $pageList = new StaticPageList($this->theme);
        $pages = $pageList->getPageTree(true);

        // Andrés Martínez : get only events pages to list at treebranch
        $events = collect();
        foreach ($pages as $i) {
           if($i->page->template == 'eventos'){
                $i->date_end = (new DateTime($i->page->date_end))->format('Y-m-d');
                $i->date_start_pretty_num = (new DateTime($i->page->date_start))->format('d.m.y');
                
                if($i->date_end < $now){
                    $events->push($i);
                }
           }
        }
       
        $pages = $events->values();

        $searchTerm = Str::lower($this->getSearchTerm());

        if (strlen($searchTerm)) {
            $words = explode(' ', $searchTerm);

            $iterator = function($pages) use (&$iterator, $words) {
                $result = [];

                foreach ($pages as $page) {
                    if ($this->textMatchesSearch($words, $this->subtreeToText($page))) {
                        $result[] = (object) [
                            'page'     => $page->page,
                            'subpages' => $iterator($page->subpages)
                        ];
                    }
                }

                return $result;
            };

            $pages = $iterator($pages);
        }

        return $pages;
    }



    protected function getThemeSessionKey($prefix)
    {
        return $prefix.$this->theme->getDirName();
    }

    protected function updateList()
    {
        return ['#'.$this->getId('page-list') => $this->makePartial('items', ['items' => $this->getData()])];
    }

    protected function subtreeToText($page)
    {
        $result = $this->pageToText($page->page);

        $iterator = function($pages) use (&$iterator, &$result) {
            foreach ($pages as $page) {
                $result .= ' '.$this->pageToText($page->page);
                $iterator($page->subpages);
            }
        };

        $iterator($page->subpages);

        return $result;
    }

    protected function pageToText($page)
    {
        $viewBag = $page->getViewBag();

        return $page->getViewBag()->property('title').' '.$page->getViewBag()->property('url');
    }

    protected function getSession($key = null, $default = null)
    {
        $key = strlen($key) ? $this->getThemeSessionKey($key) : $key;

        return parent::getSession($key, $default);
    }

    protected function putSession($key, $value)
    {
        return parent::putSession($this->getThemeSessionKey($key), $value);
    }

    // Andrés Martínez : Duplicate Event
    public function onCopyEvent(){
        
        // Define Theme
        $theme = Theme::getActiveTheme();

        // Get fileName of event to duplicate
        $flnm =  post('fileNamePost');

        // Get Url of event to duplicate
        $url =  post('fileUrlPost');

        // Get Title of event to duplicate
        $title =  post('fileTitlePost');

        // Prefix unique
        $preU= Carbon::parse(Carbon::now())->timestamp;
        
        // Get content_path
        $content_path = themes_path().'/default/content/static-pages/';
        
        // Source and destination file
        $sourceFilePath = $content_path.$flnm.'.htm';
        $destinationPath=$content_path.$flnm.'-copy-'.$preU.'.htm';

        // Create Empty Event
        $iEvento = new Evento();
        $iEvento->fileName = $flnm.'-copy-'.$preU;

        // Append Event to Meta yaml
        $MEventoList = new MEventoList($theme);
        $MEventoList->appendPage($iEvento);
        
        // Copy File
        if(! \File::copy($sourceFilePath,$destinationPath)){
              die("Couldn't copy file");        
        } else {
            
            // Change values : url and title
            $content = file_get_contents($destinationPath);
            $search =  $url;
            $replace = $url.'-copy-'.$preU;
            $content = str_replace($search,$replace,$content);
            file_put_contents($destinationPath, $content);

            $content = file_get_contents($destinationPath);
            $search =  $title;
            $replace = $title.'-copy-'.$preU;
            $content = str_replace($search,$replace,$content);
            file_put_contents($destinationPath, $content);

        }

        // Copy Mtlng
        if(isset($iEvento->localeUrl)){

            $alangs = $object->localeUrl;
                
            foreach ($alangs as $key => $value) {
                
                // Get content_path
                $content_path = themes_path().'/default/content/static-pages-'.$key.'/';

                // Source and destination file
                $sourceFilePath = $content_path.$flnm.'.htm';
                $destinationPath = $content_path.$flnm.'-copy-'.$preU.'.htm';

                if (File::exists($sourceFilePath))
                {
                    if(! \File::copy($sourceFilePath,$destinationPath)){
                        die("Couldn't copy file");        
                    } else {
                    
                        // Change values : url and title
                        $content = file_get_contents($destinationPath);
                        $search =  $url;
                        $replace = $url.'-copy-'.$preU;
                        $content = str_replace($search,$replace,$content);
                        file_put_contents($destinationPath, $content);

                        $content = file_get_contents($destinationPath);
                        $search =  $title;
                        $replace = $title.'-copy-'.$preU;
                        $content = str_replace($search,$replace,$content);
                        file_put_contents($destinationPath, $content);
                    }  
                }
            }
        
        }
    }
}
