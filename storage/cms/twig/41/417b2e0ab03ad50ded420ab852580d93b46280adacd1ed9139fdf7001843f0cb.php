<?php

/* /Users/jekyll/workspace/cadizturismo/themes/default/layouts/experience.htm */
class __TwigTemplate_8fa6faedb7ea519a787acc6f8f1931e69d5a4eb55cee29a2cb171c24743c7e0f extends Twig_Template
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
        echo "/plugins/rainlab/pages/assets/iziModal/css/iziModal.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo url("/");
        echo "/plugins/rainlab/pages/assets/css/style-comarcas.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo url("/");
        echo "/plugins/rainlab/pages/assets/css/style-village.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo url("/");
        echo "/plugins/rainlab/pages/assets/css/style-event.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 14
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
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/headerexp"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "
    ";
        // line 25
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "
    <div class=\"vertical-share\">
        <p class=\"also-title\">";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("COMPARTIR"));
        echo "</p><img src=\"";
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-sep.svg\" class=\"fr-fil fr-dib\">
        <div class=\"links-container\"><a href=\"https://www.facebook.com/sharer/sharer.php?u=cadiz-turismo.jekyllme.com\">Facebook&nbsp;</a>
            <span>·</span>
            <a data-action=\"share/whatsapp/share\" href=\"href=\">Whatsapp&nbsp;</a>
        </div>
    </div>

    ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "
    <!-- SCRIPTS -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 40
        echo url("/");
        echo "/plugins/rainlab/pages/assets/js/script-select2.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 41
        echo url("/");
        echo "/plugins/rainlab/pages/assets/iziModal/js/iziModal.js\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 43
        echo url("/");
        echo "/plugins/rainlab/pages/assets/js/style.js\"></script>

  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/workspace/cadizturismo/themes/default/layouts/experience.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 43,  99 => 41,  95 => 40,  89 => 36,  85 => 35,  73 => 28,  69 => 26,  65 => 25,  62 => 24,  58 => 23,  46 => 14,  42 => 13,  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{url('/')}}/plugins/rainlab/pages/assets/iziModal/css/iziModal.css\"/>
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

    {% partial 'site/headerexp' %}

    {% component 'staticPage' %}

    <div class=\"vertical-share\">
        <p class=\"also-title\">{{'COMPARTIR'|_}}</p><img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-sep.svg\" class=\"fr-fil fr-dib\">
        <div class=\"links-container\"><a href=\"https://www.facebook.com/sharer/sharer.php?u=cadiz-turismo.jekyllme.com\">Facebook&nbsp;</a>
            <span>·</span>
            <a data-action=\"share/whatsapp/share\" href=\"href=\">Whatsapp&nbsp;</a>
        </div>
    </div>

    {% partial 'site/footer' %}

    <!-- SCRIPTS -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js\"></script>
    <script type=\"text/javascript\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/js/script-select2.js\"></script>
    <script type=\"text/javascript\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/iziModal/js/iziModal.js\"></script>

    <script type=\"text/javascript\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/js/style.js\"></script>

  </body>
</html>", "/Users/jekyll/workspace/cadizturismo/themes/default/layouts/experience.htm", "");
    }
}
