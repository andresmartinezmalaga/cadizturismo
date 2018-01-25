<?php

/* /Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/headerevent.htm */
class __TwigTemplate_b9c9308ea7e79d3a9abc5180120c2a387985a5f6990f5a89d3f35ef2e933a3c5 extends Twig_Template
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
        echo "<!-- MENU-->
";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "

<!-- FEATURES -->
<div id=\"out-features\" class=\"event-features\">
  <div class=\"feature\"><img src=\"/cadizturismo/storage/app/media/uploaded-files/templates/calendar-event.svg\" class=\"fr-fil fr-dib\">

    <p class=\"feature-txt\">03.08.17 - 05.08.17</p>
  </div>
  <div class=\"feature\"><img src=\"/cadizturismo/storage/app/media/uploaded-files/templates/cultura-event.svg\" class=\"fr-fil fr-dib\">

    <p class=\"feature-txt\">Cultura</p>
  </div>
  <div class=\"feature\"><img src=\"/cadizturismo/storage/app/media/uploaded-files/templates/location.svg\" class=\"fr-fil fr-dib\">

    <p class=\"feature-txt\">Sanlúcar de Barrameda</p><a class=\"feature-txt-mapa\" href=\"https://www.google.es/maps/place/11540+Sanl%C3%BAcar+de+Barrameda,+C%C3%A1diz/@36.7732122,-6.391691,12.95z/data=!4m5!3m4!1s0xd0dde12a2f8e5ef:0xe9bbc21d97ce48c6!8m2!3d36.7725774!4d-6.3529689\" target=\"_blank\">Ver mapa</a></div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/headerevent.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- MENU-->
{% partial \"site/menu\" %}


<!-- FEATURES -->
<div id=\"out-features\" class=\"event-features\">
  <div class=\"feature\"><img src=\"/cadizturismo/storage/app/media/uploaded-files/templates/calendar-event.svg\" class=\"fr-fil fr-dib\">

    <p class=\"feature-txt\">03.08.17 - 05.08.17</p>
  </div>
  <div class=\"feature\"><img src=\"/cadizturismo/storage/app/media/uploaded-files/templates/cultura-event.svg\" class=\"fr-fil fr-dib\">

    <p class=\"feature-txt\">Cultura</p>
  </div>
  <div class=\"feature\"><img src=\"/cadizturismo/storage/app/media/uploaded-files/templates/location.svg\" class=\"fr-fil fr-dib\">

    <p class=\"feature-txt\">Sanlúcar de Barrameda</p><a class=\"feature-txt-mapa\" href=\"https://www.google.es/maps/place/11540+Sanl%C3%BAcar+de+Barrameda,+C%C3%A1diz/@36.7732122,-6.391691,12.95z/data=!4m5!3m4!1s0xd0dde12a2f8e5ef:0xe9bbc21d97ce48c6!8m2!3d36.7725774!4d-6.3529689\" target=\"_blank\">Ver mapa</a></div>
</div>", "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/headerevent.htm", "");
    }
}
