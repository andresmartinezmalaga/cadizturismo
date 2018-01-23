<?php

/* /Users/jekyll/Desktop/workspace/cadizturismo/themes/default/layouts/municipio.htm */
class __TwigTemplate_ba0cabd1ee4b31b702fdfa4013d3d8ad463f9f08287113e4af62e3356673b072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">

<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1\">
    <title>Cádiz</title>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo url("/");
        echo "/plugins/rainlab/pages/assets/css/style-comarcas.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo url("/");
        echo "/plugins/rainlab/pages/assets/css/style-village.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo url("/");
        echo "/plugins/rainlab/pages/assets/css/style-event.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo url("/");
        echo "/plugins/rainlab/pages/assets/css/style.css\"/>
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"./assets/svg/favicons/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"./assets/svg/favicons/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"./assets/svg/favicons/favicon-16x16.png\">
    <link rel=\"manifest\" href=\"./assets/svg/favicons/manifest.json\">
    <link rel=\"mask-icon\" href=\"./assets/svg/favicons/safari-pinned-tab.svg\" color=\"#383838\">
    <meta name=\"theme-color\" content=\"#ffffff\">
</head>

    ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "
    ";
        // line 24
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 25
        echo "
    <div id='prtlMunicipalities' class=\"all-events\">
        <div class=\"all-events-container\">
        ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("municipalities"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "        </div>
    </div>

    <div class=\"vertical-share\">
        <p class=\"also-title\">";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("COMPARTIR"));
        echo "</p><img src=\"";
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-sep.svg\" class=\"fr-fil fr-dib\">
        <div class=\"links-container\"><a href=\"https://www.facebook.com/sharer/sharer.php?u=cadiz-turismo.jekyllme.com\">Facebook&nbsp;</a>
            <span>·</span>
            <a data-action=\"share/whatsapp/share\" href=\"href=\">Whatsapp&nbsp;</a>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 43
        echo url("/");
        echo "/plugins/rainlab/pages/assets/js/script-select2.js\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 45
        echo url("/");
        echo "/plugins/rainlab/pages/assets/js/style.js\"></script>
   
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/layouts/municipio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 45,  95 => 43,  80 => 33,  74 => 29,  70 => 28,  65 => 25,  61 => 24,  58 => 23,  54 => 22,  42 => 13,  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">

<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1\">
    <title>Cádiz</title>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"{{url('/')}}/plugins/rainlab/pages/assets/css/style-comarcas.css\"/>
    <link rel=\"stylesheet\" href=\"{{url('/')}}/plugins/rainlab/pages/assets/css/style-village.css\"/>
    <link rel=\"stylesheet\" href=\"{{url('/')}}/plugins/rainlab/pages/assets/css/style-event.css\"/>
    <link rel=\"stylesheet\" href=\"{{url('/')}}/plugins/rainlab/pages/assets/css/style.css\"/>
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"./assets/svg/favicons/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"./assets/svg/favicons/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"./assets/svg/favicons/favicon-16x16.png\">
    <link rel=\"manifest\" href=\"./assets/svg/favicons/manifest.json\">
    <link rel=\"mask-icon\" href=\"./assets/svg/favicons/safari-pinned-tab.svg\" color=\"#383838\">
    <meta name=\"theme-color\" content=\"#ffffff\">
</head>

    {% partial 'site/header' %}

    {% component 'staticPage' %}

    <div id='prtlMunicipalities' class=\"all-events\">
        <div class=\"all-events-container\">
        {% partial \"municipalities\" %}
        </div>
    </div>

    <div class=\"vertical-share\">
        <p class=\"also-title\">{{'COMPARTIR'|_}}</p><img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-sep.svg\" class=\"fr-fil fr-dib\">
        <div class=\"links-container\"><a href=\"https://www.facebook.com/sharer/sharer.php?u=cadiz-turismo.jekyllme.com\">Facebook&nbsp;</a>
            <span>·</span>
            <a data-action=\"share/whatsapp/share\" href=\"href=\">Whatsapp&nbsp;</a>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js\"></script>
    <script type=\"text/javascript\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/js/script-select2.js\"></script>

    <script type=\"text/javascript\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/js/style.js\"></script>
   
  </body>
</html>", "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/layouts/municipio.htm", "");
    }
}
