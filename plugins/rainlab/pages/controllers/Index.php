<?php namespace RainLab\Pages\Controllers;

use Url;
use Lang;
use Flash;
use Event as MEvent;
use Config;
use Request;
use Response;
use BackendMenu;
use Cms\Classes\Layout;
use Cms\Classes\Theme;
use Cms\Classes\CmsCompoundObject;
use Cms\Widgets\TemplateList;
use Backend\Classes\Controller;
use RainLab\Pages\Widgets\PageList;

use RainLab\Pages\Widgets\ExperienceList;
use RainLab\Pages\Widgets\EventoList;
use RainLab\Pages\Widgets\RutaList;

use RainLab\Pages\Widgets\MenuList;

use RainLab\Pages\Widgets\SnippetList;
use RainLab\Pages\Classes\Snippet;

use RainLab\Pages\Classes\Page as StaticPage;

use RainLab\Pages\Classes\Experience as StaticExperience;
use RainLab\Pages\Classes\Evento as StaticEvento;
use RainLab\Pages\Classes\Ruta as StaticRuta;

use RainLab\Pages\Classes\Router;
use RainLab\Pages\Classes\Content;
use RainLab\Pages\Classes\MenuItem;
use RainLab\Pages\Plugin as PagesPlugin;
use RainLab\Pages\Classes\SnippetManager;
use ApplicationException;
use Exception;

// Andrés Martinez use PagesTemplates
use Backend\Classes\PagesTemplates;

/**
 * Pages and Menus index
 *
 * @package rainlab\pages
 * @author Alexey Bobkov, Samuel Georges
 */
class Index extends Controller
{
    use \Backend\Traits\InspectableContainer;

    protected $theme;

    public $requiredPermissions = ['rainlab.pages.*'];

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('RainLab.Pages', 'pages', 'pages');

        try {
            if (!($this->theme = Theme::getEditTheme())) {
                throw new ApplicationException(Lang::get('cms::lang.theme.edit.not_found'));
            }

            new PageList($this, 'pageList');
            new MenuList($this, 'menuList');
            new SnippetList($this, 'snippetList');

            // Andrés Martinez : create ExperienceList & EventList
            new ExperienceList($this, 'experienceList');
            new EventoList($this, 'eventoList');
            new RutaList($this, 'rutaList');

            new TemplateList($this, 'contentList', function() {
                return $this->getContentTemplateList();
            });
        }
        catch (Exception $ex) {
            $this->handleError($ex);
        }
    }

    //
    // Pages, menus and text blocks
    //

    public function index()
    {
        $this->addJs('/modules/backend/assets/js/october.treeview.js', 'core');
        $this->addJs('/plugins/rainlab/pages/assets/js/pages-page.js');
        $this->addJs('/plugins/rainlab/pages/assets/js/pages-snippets.js');
        $this->addCss('/plugins/rainlab/pages/assets/css/pages.css');

        // Andrés Martínez :  load ours css
        $this->addCss('/plugins/rainlab/pages/assets/css/style-totalEvents.css');
        $this->addCss('/plugins/rainlab/pages/assets/css/style-comarcas.css');
        $this->addCss('/plugins/rainlab/pages/assets/css/style-event.css');
        $this->addCss('/plugins/rainlab/pages/assets/css/style-home.css');
        $this->addCss('/plugins/rainlab/pages/assets/css/style-village.css');
        $this->addCss('/plugins/rainlab/pages/assets/css/style.css');


        // Preload the code editor class as it could be needed
        // before it loads dynamically.
        $this->addJs('/modules/backend/formwidgets/codeeditor/assets/js/build-min.js', 'core');

        $this->bodyClass = 'compact-container';
        $this->pageTitle = 'rainlab.pages::lang.plugin.name';
        $this->pageTitleTemplate = '%s Pages';

        if (Request::ajax() && Request::input('formWidgetAlias')) {
            $this->bindFormWidgetToController();
        }
    }

    public function index_onOpen()
    {
        $this->validateRequestTheme();

        $type = Request::input('type');
        $object = $this->loadObject($type, Request::input('path'));

        // Andrés Martínez : load Static-Parents templates and sons fixeds
        $pageFileName = $object['fileName'];
        $templateMarkup = $object['markup'];


        if($pageFileName == 'comarcas.htm' && $templateMarkup ==''){
            $object['markup'] = PagesTemplates::getTComarcas();
        }

            if(
                ($pageFileName == 'comarcas-bahia-de-cadiz.htm' ||
                $pageFileName == 'comarcas-campina-de-jerez.htm' ||
                $pageFileName == 'comarcas-campo-de-gibraltar.htm' ||
                $pageFileName == 'comarcas-costa-noroeste.htm' ||
                $pageFileName == 'comarcas-la-janda.htm' ||
                $pageFileName == 'comarcas-sierra-de-cadiz.htm') && $templateMarkup =='') {

                $object['markup'] = PagesTemplates::getTComarca();
            }

        if($pageFileName == 'municipios.htm' && $templateMarkup ==''){
            $object['markup'] = PagesTemplates::getTMunicipios();
        }

        if($pageFileName == 'playas.htm' && $templateMarkup ==''){
            $object['markup'] = PagesTemplates::getTPlayas();
        }

        if($pageFileName == 'naturaleza.htm' && $templateMarkup ==''){
            $object['markup'] = PagesTemplates::getTNaturaleza();
        }

            if($pageFileName == 'naturaleza-via-verde.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTViaVerde();
            }

            if($pageFileName == 'naturaleza-birdwatching.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTBirdwatching();
            }

            if($pageFileName == 'naturaleza-espacios-naturales.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTEspaciosnaturales();
            }

              if($pageFileName == 'naturaleza-espacios-naturales-bahia-de-cadiz.htm' && $templateMarkup ==''){
                  $object['markup'] = PagesTemplates::getTEspacioNatural();
              }
              if($pageFileName == 'naturaleza-espacios-naturales-del-estrecho.htm' && $templateMarkup ==''){
                  $object['markup'] = PagesTemplates::getTEspacioNatural();
              }
              if($pageFileName == 'naturaleza-espacios-naturales-donana.htm' && $templateMarkup ==''){
                  $object['markup'] = PagesTemplates::getTEspacioNatural();
              }
              if($pageFileName == 'naturaleza-espacios-naturales-la-brena-y-marismas-de-barbate.htm' && $templateMarkup ==''){
                  $object['markup'] = PagesTemplates::getTEspacioNatural();
              }
              if($pageFileName == 'naturaleza-espacios-naturales-los-alcornocales.htm' && $templateMarkup ==''){
                  $object['markup'] = PagesTemplates::getTEspacioNatural();
              }
              if($pageFileName == 'naturaleza-espacios-naturales-sierra-de-grazalema.htm' && $templateMarkup ==''){
                  $object['markup'] = PagesTemplates::getTEspacioNatural();
              }

        if($pageFileName == 'diversion.htm' && $templateMarkup ==''){
            $object['markup'] = PagesTemplates::getTDiversion();
        }

            if($pageFileName == 'diversion-compras.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTCompras();
            }

            if($pageFileName == 'diversion-locales-de-ocio.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTLocalesOcio();
            }

            if($pageFileName == 'diversion-parques-de-ocio.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTParquesOcio();
            }

        if($pageFileName == 'cultura.htm' && $templateMarkup ==''){
            $object['markup'] = PagesTemplates::getTCultura();
        }
            if($pageFileName == 'cultura-fiesta.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTFiesta();
            }

            if($pageFileName == 'cultura-flamenco.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTFlamenco();
            }

            if($pageFileName == 'cultura-monumentos.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTMonumento();
            }

            if($pageFileName == 'cultura-teatro.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTTeatro();
            }


        if($pageFileName == 'gastronomia.htm' && $templateMarkup ==''){
            $object['markup'] = PagesTemplates::getTGastronomia();
        }

            if($pageFileName == 'gastronomia-el-vino.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTVino();
            }

            if($pageFileName == 'gastronomia-gourmet.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTGourmet();
            }

            if($pageFileName == 'gastronomia-comida-tradicional.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTComida();
            }

            if($pageFileName == 'como-llegar.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTLlegar();
            }

            if($pageFileName == 'sobre-nosotros.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTSomos();
            }

            if($pageFileName == 'necesitas-ayuda.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTAyuda();
            }

            if($pageFileName == 'sala-prensa.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTSala();
            }

            if($pageFileName == 'publicaciones.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTPublicaciones();
            }

            if($pageFileName == 'sala-prensa-prensa.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTPrensa();
            }

            if($pageFileName == 'sala-prensa-reportajes.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTReportaje();
            }

            if($pageFileName == 'politica-de-cookies.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTCookies();
            }

            if($pageFileName == 'legal.htm' && $templateMarkup ==''){
                $object['markup'] = PagesTemplates::getTLegal();
            }

        return $this->pushObjectForm($type, $object);


    }

    public function onSave()
    {
        $this->validateRequestTheme();

        $type = Request::input('objectType');

        $object = $this->fillObjectFromPost($type);

        $object->save();

        /*
         * Extensibility
         */
        MEvent::fire('pages.object.save', [$this, $object, $type]);
        MEvent::fire('experiences.object.save', [$this, $object, $type]);
        MEvent::fire('eventos.object.save', [$this, $object, $type]);
        MEvent::fire('rutas.object.save', [$this, $object, $type]);

        $this->fireEvent('object.save', [$object, $type]);

        $result = [
            'objectPath'  => $type != 'content' ? $object->getBaseFileName() : $object->fileName,
            'objectMtime' => $object->mtime,
            'tabTitle'    => $this->getTabTitle($type, $object)
        ];


        if ($type == 'page') {
            $result['pageUrl'] = Url::to($object->getViewBag()->property('url'));

            PagesPlugin::clearCache();
        }

        if ($type == 'experience') {
            $result['pageUrl'] = Url::to($object->getViewBag()->property('url'));

            PagesPlugin::clearCache();
        }

        if ($type == 'evento') {
            $result['pageUrl'] = Url::to($object->getViewBag()->property('url'));

            PagesPlugin::clearCache();
        }

        if ($type == 'ruta') {
            $result['pageUrl'] = Url::to($object->getViewBag()->property('url'));

            PagesPlugin::clearCache();
        }

        $successMessages = [
            'page' => 'rainlab.pages::lang.page.saved',
            'experience' => 'rainlab.pages::lang.experience.saved',
            'evento' => 'rainlab.pages::lang.event.saved',
            'ruta' => 'rainlab.pages::lang.ruta.saved',
            'menu' => 'rainlab.pages::lang.menu.saved'
        ];

        $successMessage = isset($successMessages[$type])
            ? $successMessages[$type]
            : $successMessages['page'];

        Flash::success(Lang::get($successMessage));

        return $result;
    }

    public function onCreateObject()
    {
        $this->validateRequestTheme();

        $type = Request::input('type');

        $object = $this->createObject($type);

        $parent = Request::input('parent');
        $parentPage = null;

        if ($type == 'page') {

            if (strlen($parent)) {
                $parentPage = StaticPage::load($this->theme, $parent);
            }
            
            $object->setDefaultLayout($parentPage);

        }

        // Andrés Martínez : parentPage setDefaultLayout Experiences
        if ($type == 'experience') {

            if (strlen($parent)) {
                $parentPage = StaticExperience::load($this->theme, $parent);
            }

            $object->setDefaultLayout($parentPage);
        }

        // Andrés Martínez : parentPage setDefaultLayout Events
        if ($type == 'evento') {

            if (strlen($parent)) {
                $parentPage = StaticEvento::load($this->theme, $parent);
            }

            $object->setDefaultLayout($parentPage);
        }

        // Andrés Martínez : parentPage setDefaultLayout Events
        if ($type == 'ruta') {

            if (strlen($parent)) {
                $parentPage = StaticRuta::load($this->theme, $parent);
            }

            $object->setDefaultLayout($parentPage);
        }

        // Andrés Martínez : add subtype to pages type, when we need change fields.yaml
        if($parent == 'playas') {

            $widget = $this->makeObjectFormWidget($type, $object,null,'playas');

        } elseif($parent == 'publicaciones'){

            $widget = $this->makeObjectFormWidget($type, $object,null,'publicaciones');

        } elseif($parent == 'sala-prensa-prensa' ){

            $widget = $this->makeObjectFormWidget($type, $object,null,'noticias');

        } elseif($parent == 'sala-prensa-reportajes'){

            $widget = $this->makeObjectFormWidget($type, $object,null,'reportajes');

        } else {

           $widget = $this->makeObjectFormWidget($type, $object);

        }

        $this->vars['objectPath'] = '';

        $result = [
            'tabTitle' => $this->getTabTitle($type, $object),
            'tab'      => $this->makePartial('form_page', [
                'form'         => $widget,
                'objectType'   => $type,
                'objectTheme'  => $this->theme->getDirName(),
                'objectMtime'  => null,
                'objectParent' => $parent,
                'parentPage'   => $parentPage
            ])
        ];



        return $result;
    }

    public function onDelete()
    {
        $this->validateRequestTheme();

        $type = Request::input('objectType');

        $deletedObjects = $this->loadObject($type, trim(Request::input('objectPath')))->delete();

        $result = [
            'deletedObjects' => $deletedObjects,
            'theme' => $this->theme->getDirName()
        ];

        return $result;
    }

    public function onDeleteObjects()
    {
        $this->validateRequestTheme();

        $type = Request::input('type');
        $objects = Request::input('object');

        if (!$objects) {
            $objects = Request::input('template');
        }

        $error = null;
        $deleted = [];

        try {
            foreach ($objects as $path => $selected) {
                if (!$selected) {
                    continue;
                }
                $object = $this->loadObject($type, $path, true);
                if (!$object) {
                    continue;
                }

                $deletedObjects = $object->delete();
                if (is_array($deletedObjects)) {
                    $deleted = array_merge($deleted, $deletedObjects);
                }
                else {
                    $deleted[] = $path;
                }
            }
        }
        catch (Exception $ex) {
            $error = $ex->getMessage();
        }

        return [
            'deleted' => $deleted,
            'error'   => $error,
            'theme'   => Request::input('theme')
        ];
    }

    public function onOpenConcurrencyResolveForm()
    {

        return $this->makePartial('concurrency_resolve_form');
    }

    public function onGetMenuItemTypeInfo()
    {
        $type = Request::input('type');

        return [
            'menuItemTypeInfo' => MenuItem::getTypeInfo($type)
        ];
    }

    public function onUpdatePageLayout()
    {
        $this->validateRequestTheme();

        $type = Request::input('objectType');

        $object = $this->fillObjectFromPost($type);


        return $this->pushObjectForm($type, $object);
    }

    public function onGetInspectorConfiguration()
    {
        $configuration = [];

        $snippetCode = Request::input('snippet');
        $componentClass = Request::input('component');

        if (strlen($snippetCode)) {
            $snippet = SnippetManager::instance()->findByCodeOrComponent($this->theme, $snippetCode, $componentClass);
            if (!$snippet) {
                throw new ApplicationException(trans('rainlab.pages::lang.snippet.not_found', ['code' => $snippetCode]));
            }

            $configuration = $snippet->getProperties();
        }

        return [
            'configuration' => [
                'properties'  => $configuration,
                'title'       => $snippet->getName(),
                'description' => $snippet->getDescription()
            ]
        ];
    }

    public function onGetSnippetNames()
    {
        $codes = array_unique(Request::input('codes'));
        $result = [];

        foreach ($codes as $snippetCode) {
            $parts = explode('|', $snippetCode);
            $componentClass = null;

            if (count($parts) > 1) {
                $snippetCode = $parts[0];
                $componentClass = $parts[1];
            }

            $snippet = SnippetManager::instance()->findByCodeOrComponent($this->theme, $snippetCode, $componentClass);

            if (!$snippet) {
                $result[$snippetCode] = trans('rainlab.pages::lang.snippet.not_found', ['code' => $snippetCode]);
            }
            else {
                $result[$snippetCode] =$snippet->getName();
            }
        }

        return [
            'names' => $result
        ];
    }

    public function onMenuItemReferenceSearch()
    {
        $alias = Request::input('alias');

        $widget = $this->makeFormWidget(
            'Rainlab\Pages\FormWidgets\MenuItemSearch',
            [],
            ['alias' => $alias]
        );

        return $widget->onSearch();
    }

    //
    // Methods for the internal use
    //

    protected function validateRequestTheme()
    {
        if ($this->theme->getDirName() != Request::input('theme')) {
            throw new ApplicationException(trans('cms::lang.theme.edit.not_match'));
        }
    }

    protected function loadObject($type, $path, $ignoreNotFound = false)
    {

        $class = $this->resolveTypeClassName($type);

        if (!($object = call_user_func(array($class, 'load'), $this->theme, $path))) {
            if (!$ignoreNotFound) {
               throw new ApplicationException(trans('rainlab.pages::lang.object.not_found'));
            }

            return null;
        }

        return $object;
    }

    protected function createObject($type)
    {

        $class = $this->resolveTypeClassName($type);

        if (!($object = $class::inTheme($this->theme))) {
            throw new ApplicationException(trans('rainlab.pages::lang.object.not_found'));
        }


        return $object;
    }

    protected function resolveTypeClassName($type)
    {

        $types = [
            'page'    => 'RainLab\Pages\Classes\Page',
            'experience'    => 'RainLab\Pages\Classes\Experience',
            'evento'    => 'RainLab\Pages\Classes\Evento',
            'ruta'    => 'RainLab\Pages\Classes\Ruta',
            'menu'    => 'RainLab\Pages\Classes\Menu',
            'content' => 'RainLab\Pages\Classes\Content'
        ];

        if (!array_key_exists($type, $types)) {
            throw new ApplicationException(trans('rainlab.pages::lang.object.invalid_type'));
        }

        return $types[$type];
    }

    protected function makeObjectFormWidget($type, $object, $alias = null, $subtype = null)
    {

       ;
        // Andrés Martínez : add subtype to pages
        $pageFieldsYaml = '~/plugins/rainlab/pages/classes/page/fields.yaml';

        if($subtype == 'playas'){
           $pageFieldsYaml = '~/plugins/rainlab/pages/classes/page/playafields.yaml';
        }

        if($subtype == 'publicaciones'){
           $pageFieldsYaml = '~/plugins/rainlab/pages/classes/page/publicacionesfields.yaml';
        }

        if($subtype == 'noticias'){
           $pageFieldsYaml = '~/plugins/rainlab/pages/classes/page/noticiasfields.yaml';
        }

        if($subtype == 'reportajes'){
           $pageFieldsYaml = '~/plugins/rainlab/pages/classes/page/reportajesfields.yaml';
        }

        $formConfigs = [
            'page'          => $pageFieldsYaml,
            'experience'    => '~/plugins/rainlab/pages/classes/experience/fields.yaml',
            'evento'         => '~/plugins/rainlab/pages/classes/evento/fields.yaml',
            'ruta'         => '~/plugins/rainlab/pages/classes/ruta/fields.yaml',
            'menu'          => '~/plugins/rainlab/pages/classes/menu/fields.yaml',
            'content'       => '~/plugins/rainlab/pages/classes/content/fields.yaml'
        ];

        if (!array_key_exists($type, $formConfigs)) {
            throw new ApplicationException(trans('rainlab.pages::lang.object.not_found'));
        }



        $widgetConfig = $this->makeConfig($formConfigs[$type]);
        $widgetConfig->model = $object;
        $widgetConfig->alias = $alias ?: 'form'.studly_case($type).md5($object->getFileName()).uniqid();
        $widgetConfig->context = !$object->exists ? 'create' : 'update';

        $widget = $this->makeWidget('Backend\Widgets\Form', $widgetConfig);

        if ($type == 'page') {
            
            echo json_encode($object);
            echo $subtype;
            dd(1)

            $widget->bindEvent('form.extendFieldsBefore', function() use ($widget, $object) {
                $this->checkContentField($widget, $object);
                $this->addPagePlaceholders($widget, $object);
                $this->addPageSyntaxFields($widget, $object);
            });
        }

        if ($type == 'experience') {

            $widget->bindEvent('form.extendFieldsBefore', function() use ($widget, $object) {
                $this->checkContentField($widget, $object);
                $this->addPagePlaceholders($widget, $object);
                $this->addPageSyntaxFields($widget, $object);
            });
        }

        if ($type == 'evento') {

            $widget->bindEvent('form.extendFieldsBefore', function() use ($widget, $object) {
                $this->checkContentField($widget, $object);
                $this->addPagePlaceholders($widget, $object);
                $this->addPageSyntaxFields($widget, $object);
            });
        }

        if ($type == 'ruta') {

            $widget->bindEvent('form.extendFieldsBefore', function() use ($widget, $object) {
                $this->checkContentField($widget, $object);
                $this->addPagePlaceholders($widget, $object);
                $this->addPageSyntaxFields($widget, $object);
            });
        }


        return $widget;
    }

    protected function checkContentField($formWidget, $page)
    {
        if (!($layout = $page->getLayoutObject())) {
            return;
        }

        $component = $layout->getComponent('staticPage');

        if (!$component->property('useContent', true)) {
            unset($formWidget->secondaryTabs['fields']['markup']);
        }
    }

    protected function addPageSyntaxFields($formWidget, $page)
    {
        $fields = $page->listLayoutSyntaxFields();

        foreach ($fields as $fieldCode => $fieldConfig) {
            if ($fieldConfig['type'] == 'fileupload') continue;

            if ($fieldConfig['type'] == 'repeater') {
                $fieldConfig['form']['fields'] = array_get($fieldConfig, 'fields', []);
                unset($fieldConfig['fields']);
            }

            /*
            * Custom fields placement
            */
            $placement = (!empty($fieldConfig['placement']) ? $fieldConfig['placement'] : NULL);

            switch ($placement) {
                case "primary":
                    $formWidget->tabs['fields']['viewBag[' . $fieldCode . ']'] = $fieldConfig;
                    break;

                default:
                    $fieldConfig['cssClass'] = 'secondary-tab ' . array_get($fieldConfig, 'cssClass', '');
                    $formWidget->secondaryTabs['fields']['viewBag[' . $fieldCode . ']'] = $fieldConfig;
                    break;
            }

            /*
             * Translation support
             */
            $translatableTypes = ['text', 'textarea', 'richeditor', 'repeater'];
            if (in_array($fieldConfig['type'], $translatableTypes)) {
                $page->translatable[] = 'viewBag['.$fieldCode.']';
            }
        }
    }

    protected function addPagePlaceholders($formWidget, $page)
    {
        $placeholders = $page->listLayoutPlaceholders();

        foreach ($placeholders as $placeholderCode => $info) {
            if ($info['ignore']) {
                continue;
            }

            $placeholderTitle = $info['title'];
            $fieldConfig = [
                'tab'     => $placeholderTitle,
                'stretch' => '1',
                'size'    => 'huge'
            ];

            if ($info['type'] != 'text') {
                $fieldConfig['type'] = 'richeditor';
            }
            else {
                $fieldConfig['type'] = 'codeeditor';
                $fieldConfig['language'] = 'text';
                $fieldConfig['theme'] = 'chrome';
                $fieldConfig['showGutter'] = false;
                $fieldConfig['highlightActiveLine'] = false;
                $fieldConfig['cssClass'] = 'pagesTextEditor';
                $fieldConfig['showInvisibles'] = false;
                $fieldConfig['fontSize'] = 13;
                $fieldConfig['margin'] = '20';
            }

            $formWidget->secondaryTabs['fields']['placeholders['.$placeholderCode.']'] = $fieldConfig;

            /*
             * Translation support
             */
            $page->translatable[] = 'placeholders['.$placeholderCode.']';


        }
    }

    protected function getTabTitle($type, $object)
    {

        // Andrés Martínez : add tab title for experiences events and routes
        if ($type == 'page' || $type == 'experience' || $type == 'evento' || $type == 'ruta') {
            $viewBag = $object->getViewBag();
            $result = $viewBag ? $viewBag->property('title') : false;
            if (!$result && $type == 'page' ) {
                $result = trans('rainlab.pages::lang.page.new');

            }elseif (!$result && $type == 'experience') {
                $result = trans('rainlab.pages::lang.experience.new');

            } elseif (!$result && $type == 'evento') {
                $result = trans('rainlab.pages::lang.event.new');

            } elseif (!$result && $type == 'ruta') {
                $result = trans('rainlab.pages::lang.ruta.new');
            }

            return $result;
        }
        elseif ($type == 'menu') {
            $result = $object->name;
            if (!strlen($result)) {
                $result = trans('rainlab.pages::lang.menu.new');
            }

            return $result;
        }
        elseif ($type == 'content') {
            $result = in_array($type, ['asset', 'content'])
                ? $object->getFileName()
                : $object->getBaseFileName();

            if (!$result) {
                $result = trans('cms::lang.'.$type.'.new');
            }

            return $result;
        }




        return $object->getFileName();
    }

    protected function fillObjectFromPost($type)
    {



        $objectPath = trim(Request::input('objectPath'));
        $object = $objectPath ? $this->loadObject($type, $objectPath) : $this->createObject($type);

        // Andrés Martínez : change position at code, $object->parentFileName to get it before
        if ($type != 'menu' && $type != 'content') {
            $object->parentFileName = Request::input('parentFileName');
        }

        // Andrés Martínez : make $filterSubTemplate when new objt or when update it
        $filterSubTemplate = '';

            // Create
            if($object->parentFileName != ''){
                $filterSubTemplate = $object->parentFileName;
            } else {
                if(isset($object['viewBag']['subtemplate'])){
                     $filterSubTemplate = $object['viewBag']['subtemplate'];
                }
            }

        // Andrés Martínez : change $formWidget that will be save
        if($filterSubTemplate == 'playas'){
            $formWidget = $this->makeObjectFormWidget($type, $object,null,'playas');

        } elseif($filterSubTemplate == 'publicaciones'){
            $formWidget = $this->makeObjectFormWidget($type, $object,null,'publicaciones');

        } elseif($filterSubTemplate == 'sala-prensa-prensa'){
            $formWidget = $this->makeObjectFormWidget($type, $object,null,'noticias');


        } elseif($filterSubTemplate == 'sala-prensa-reportajes'){
            $formWidget = $this->makeObjectFormWidget($type, $object,null,'reportajes');

        } else {
            $formWidget = $this->makeObjectFormWidget($type, $object);
        }




        $saveData = $formWidget->getSaveData();

        $postData = post();
        $objectData = [];



        if ($viewBag = array_get($saveData, 'viewBag')) {
            $objectData['settings'] = ['viewBag' => $viewBag];
        }

        $fields = ['markup', 'code', 'fileName', 'content', 'itemData', 'name'];

        foreach ($fields as $field) {
            if (array_key_exists($field, $saveData)) {
                $objectData[$field] = $saveData[$field];
            }
            elseif (array_key_exists($field, $postData)) {
                $objectData[$field] = $postData[$field];
            }
        }

        if ($type == 'page') {

            $placeholders = array_get($saveData, 'placeholders');

            // Andrés Set Subtemplate to pages.
            // Create
            if($object->parentFileName != '' ){
                $objectData['settings']['viewBag']['subtemplate'] = $object->parentFileName;
            // Update
            } else {
                if(isset($object['viewBag']['subtemplate'])){
                    $objectData['settings']['viewBag']['subtemplate'] = $object['viewBag']['subtemplate'];
                }
            }


            if (is_array($placeholders) && Config::get('cms.convertLineEndings', false) === true) {
                $placeholders = array_map([$this, 'convertLineEndings'], $placeholders);
            }

            $objectData['placeholders'] = $placeholders;

            // Andrés Martínez : set layout
            $objectData['settings']['viewBag']['layout'] = 'defaultnc';

            $getFileName = $object['fileName'];
            
            $amunicipios = explode('municipios-', $getFileName);
            $acomarcas = explode('comarcas-', $getFileName);
            $acultura = explode('cultura-', $getFileName);
            $arutas = explode('rutas-', $getFileName);
            $aeventos = explode('eventos-', $getFileName);
            $agastronomia = explode('gastronomia-', $getFileName);
            $adiversion = explode('diversion-', $getFileName);
            
            if(
                count($amunicipios) > 1 ||
                count($acomarcas) > 1 ||
                count($acultura) > 1 ||
                count($arutas) > 1 ||
                count($aeventos) > 1 ||
                count($agastronomia) > 1 ||
                count($adiversion) > 1
            )
            {
                 $objectData['settings']['viewBag']['layout'] = 'default';
            }


            if($getFileName == 'municipios.htm'){
                $objectData['settings']['viewBag']['layout'] = 'municipio';
            }

            if($getFileName == 'rutas.htm'){
                $objectData['settings']['viewBag']['layout'] = 'ruta';
            }

            if($getFileName == 'playas.htm'){

                $objectData['settings']['viewBag']['layout'] = 'playa';
            }

            if($getFileName == 'publicaciones.htm'){

                $objectData['settings']['viewBag']['layout'] = 'publicacion';
            }

            if($getFileName == 'sala-prensa.htm' ){

                $objectData['settings']['viewBag']['layout'] = 'prensa';
            }



            // Andrés Martínez : add cover url
            if($filterSubTemplate == 'playas' || $filterSubTemplate == 'municipios'){

                $presrc1 = explode('value="cover"', $objectData['markup']);
                if(count($presrc1)>1){
                    $presrc2 = explode('alt', $presrc1[1]);
                    $presrc3 = explode('src=', $presrc2[0]);
                    $coverurl = str_replace('"', '', $presrc3[1]);

                    $objectData['settings']['viewBag']['cover'] = $coverurl;

                }
            }

        }

        if ($type == 'experience') {
            $placeholders = array_get($saveData, 'placeholders');

            if (is_array($placeholders) && Config::get('cms.convertLineEndings', false) === true) {
                $placeholders = array_map([$this, 'convertLineEndings'], $placeholders);
            }

            $objectData['placeholders'] = $placeholders;

            // Andrés Martínez : defining experience cover
            $presrc1 = explode('value="cover"', $objectData['markup']);
            if(count($presrc1)>1){
                $presrc2 = explode('alt', $presrc1[1]);
                $presrc3 = explode('src=', $presrc2[0]);
                $coverurl = str_replace('"', '', $presrc3[1]);

                $objectData['settings']['viewBag']['cover'] = $coverurl;
            }

        }


        if ($type == 'evento') {
            $placeholders = array_get($saveData, 'placeholders');

            if (is_array($placeholders) && Config::get('cms.convertLineEndings', false) === true) {
                $placeholders = array_map([$this, 'convertLineEndings'], $placeholders);
            }

            $objectData['placeholders'] = $placeholders;

            // Andrés Martínez : defining event cover
            $presrc1 = explode('value="cover"', $objectData['markup']);
            if(count($presrc1)>1){
                $presrc2 = explode('alt', $presrc1[1]);
                $presrc3 = explode('src=', $presrc2[0]);
                $coverurl = str_replace('"', '', $presrc3[1]);

                $objectData['settings']['viewBag']['cover'] = $coverurl;
            }

        }

        if ($type == 'ruta') {



            $placeholders = array_get($saveData, 'placeholders');

            if (is_array($placeholders) && Config::get('cms.convertLineEndings', false) === true) {
                $placeholders = array_map([$this, 'convertLineEndings'], $placeholders);
            }

            $objectData['placeholders'] = $placeholders;

            // Andrés Martínez : defining event cover
            $presrc1 = explode('value="cover"', $objectData['markup']);
            if(count($presrc1)>1){
                $presrc2 = explode('alt', $presrc1[1]);
                $presrc3 = explode('src=', $presrc2[0]);
                $coverurl = str_replace('"', '', $presrc3[1]);

                $objectData['settings']['viewBag']['cover'] = $coverurl;
            }

        }

        if ($type == 'content') {
            $fileName = $objectData['fileName'];

            if (dirname($fileName) == 'static-pages') {
                throw new ApplicationException(trans('rainlab.pages::lang.content.cant_save_to_dir'));
            }

            $extension = pathinfo($fileName, PATHINFO_EXTENSION);

            if ($extension === 'htm' || $extension === 'html' || !strlen($extension)) {
                $objectData['markup'] = array_get($saveData, 'markup_html');
            }
        }

        if (!empty($objectData['markup']) && Config::get('cms.convertLineEndings', false) === true) {
            $objectData['markup'] = $this->convertLineEndings($objectData['markup']);
        }

        if (!Request::input('objectForceSave') && $object->mtime) {
            if (Request::input('objectMtime') != $object->mtime) {
                throw new ApplicationException('mtime-mismatch');
            }
        }

        // Andrés Martínez : multlng url force
        if(isset($objectData['settings']['viewBag'])){
            $objectData['settings']['viewBag']['localeUrl[en]'] = $objectData['settings']['viewBag']['url'];
            $objectData['settings']['viewBag']['localeUrl[fr]'] = $objectData['settings']['viewBag']['url'];
            $objectData['settings']['viewBag']['localeUrl[de]'] = $objectData['settings']['viewBag']['url'];
            $objectData['settings']['viewBag']['localeUrl[ru]'] = $objectData['settings']['viewBag']['url'];
        }

        $object->fill($objectData);

        /*
         * Rehydrate the object viewBag array property where values are sourced.
         */
        if ($object instanceof CmsCompoundObject && is_array($viewBag)) {
            $object->viewBag = $viewBag + $object->viewBag;
        }



        return $object;
    }

    protected function pushObjectForm($type, $object)
    {
        // Andrés Martínez : get subtype formWidget
        if($object->subtemplate == 'playas'){
            $widget = $this->makeObjectFormWidget($type, $object, null, 'playas');

        }elseif($object->subtemplate == 'publicaciones'){
            $widget = $this->makeObjectFormWidget($type, $object, null, 'publicaciones');

        } elseif($object->subtemplate == 'sala-prensa-prensa'){
            $widget = $this->makeObjectFormWidget($type, $object, null, 'noticias');

        } elseif($object->subtemplate == 'sala-prensa-reportajes'){
            $widget = $this->makeObjectFormWidget($type, $object, null, 'reportajes');

        } else {
            $widget = $this->makeObjectFormWidget($type, $object);
        }

        $this->vars['objectPath'] = Request::input('path');



        if ($type == 'page') {

            $this->vars['pageUrl'] = Url::to($object->getViewBag()->property('url'));
        }

        if ($type == 'experience') {

            $this->vars['pageUrl'] = Url::to($object->getViewBag()->property('url'));
        }

        if ($type == 'evento') {

            $this->vars['pageUrl'] = Url::to($object->getViewBag()->property('url'));
        }


        if ($type == 'ruta') {

            $this->vars['pageUrl'] = Url::to($object->getViewBag()->property('url'));

        }

        /*if ($type == 'page') {
            return [
                'tabTitle' => $this->getTabTitle($type, $object),
                'tab'      => $this->makePartial('form_page', [
                    'form'         => $widget,
                    'objectType'   => $type,
                    'objectTheme'  => $this->theme->getDirName(),
                    'objectMtime'  => $object->mtime,
                    'objectParent' => Request::input('parentFileName')
                ])
            ];
        }

        if ($type == 'experience') {
            return [
                'tabTitle' => $this->getTabTitle($type, $object),
                'tab'      => $this->makePartial('form_page', [
                    'form'         => $widget,
                    'objectType'   => $type,
                    'objectTheme'  => $this->theme->getDirName(),
                    'objectMtime'  => $object->mtime,
                    'objectParent' => Request::input('parentFileName')
                ])
            ];
        }*/

        return [
            'tabTitle' => $this->getTabTitle($type, $object),
            'tab'      => $this->makePartial('form_page', [
                'form'         => $widget,
                'objectType'   => $type,
                'objectTheme'  => $this->theme->getDirName(),
                'objectMtime'  => $object->mtime,
                'objectParent' => Request::input('parentFileName')
            ])
        ];

    }

    protected function bindFormWidgetToController()
    {


        $alias = Request::input('formWidgetAlias');
        $type = Request::input('objectType');
        $objectPath = trim(Request::input('objectPath'));
        $object = $objectPath ? $this->loadObject($type, $objectPath) : $this->createObject($type);

        $widget = $this->makeObjectFormWidget($type, $object, $alias);
        $widget->bindToController();

    }

    /**
     * Replaces Windows style (/r/n) line endings with unix style (/n)
     * line endings.
     * @param string $markup The markup to convert to unix style endings
     * @return string
     */
    protected function convertLineEndings($markup)
    {
        $markup = str_replace("\r\n", "\n", $markup);
        $markup = str_replace("\r", "\n", $markup);


        return $markup;
    }

    /**
     * Returns a list of content files
     * @return \October\Rain\Database\Collection
     */
    protected function getContentTemplateList()
    {
        $templates = Content::listInTheme($this->theme, true);

        /*
         * Extensibility
         */
        if (
            ($event = $this->fireEvent('content.templateList', [$templates], true)) ||
            ($event = MEvent::fire('pages.content.templateList', [$this, $templates], true))
        ) {
            return $event;
        }

        return $templates;
    }
}
