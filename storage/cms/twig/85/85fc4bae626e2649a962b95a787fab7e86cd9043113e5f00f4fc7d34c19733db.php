<?php

/* /Users/jekyll/Workspace/cadizTurismo/themes/default/layouts/default.htm */
class __TwigTemplate_76982b0e9c0e4047bf9c0396954bb01d07a9dbf589e33b2c9818e74a38c053f0 extends Twig_Template
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
    <meta name=\"google-site-verification\" content=\"KZtyPnD_0KXDnRTpmvwxNoBcvj3Osx_VKrXoJaucHrE\" />
    <title>Cádiz</title>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\"/>
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
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
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("COMPARTIR"));
        echo "</p><img src=\"";
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-sep.svg\" class=\"fr-fil fr-dib\">
        <div class=\"links-container\"><a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()), "html", null, true);
        echo "\" target=\"_blank\">Facebook&nbsp;</a>
            <span>·</span>
            <a data-action=\"share/whatsapp/share\" href=\"href=\">Whatsapp&nbsp;</a>
        </div>
    </div>

    ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "
    <!-- SCRIPTS -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 42
        echo url("/");
        echo "/plugins/rainlab/pages/assets/js/script-select2.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 43
        echo url("/");
        echo "/plugins/rainlab/pages/assets/iziModal/js/iziModal.js\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 45
        echo url("/");
        echo "/plugins/rainlab/pages/assets/js/style.js\"></script>

  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/Workspace/cadizTurismo/themes/default/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 45,  101 => 43,  97 => 42,  91 => 38,  87 => 37,  78 => 31,  72 => 30,  66 => 26,  62 => 25,  59 => 24,  55 => 23,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">

<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1\">
    <meta name=\"google-site-verification\" content=\"KZtyPnD_0KXDnRTpmvwxNoBcvj3Osx_VKrXoJaucHrE\" />
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



    <div class=\"vertical-share\">
        <p class=\"also-title\">{{'COMPARTIR'|_}}</p><img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-sep.svg\" class=\"fr-fil fr-dib\">
        <div class=\"links-container\"><a href=\"https://www.facebook.com/sharer/sharer.php?u={{ this.page.id }}\" target=\"_blank\">Facebook&nbsp;</a>
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
</html>", "/Users/jekyll/Workspace/cadizTurismo/themes/default/layouts/default.htm", "");
    }
}
