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
    
    <p class=\"feature-txt\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "date_start_pretty_num", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "date_end_pretty_num", array()), "html", null, true);
        echo "</p>
  </div>
  <div class=\"feature\"><img src=\"/cadizturismo/storage/app/media/uploaded-files/templates/";
        // line 11
        echo call_user_func_array($this->env->getFunction('str_slug')->getCallable(), array("slug", twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "category", array())));
        echo ".svg\" class=\"fr-fil fr-dib\">

    <p class=\"feature-txt\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "category", array()), "html", null, true);
        echo "</p>
  </div>
  <div class=\"feature\"><img src=\"/cadizturismo/storage/app/media/uploaded-files/templates/location.svg\" class=\"fr-fil fr-dib\">

    <p class=\"feature-txt\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "location", array()), "html", null, true);
        echo "</p><a class=\"feature-txt-mapa\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "locationgoogle", array()), "html", null, true);
        echo "\" target=\"_blank\">Ver mapa</a></div>
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
        return array (  53 => 17,  46 => 13,  41 => 11,  34 => 9,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- MENU-->
{% partial \"site/menu\" %}


<!-- FEATURES -->
<div id=\"out-features\" class=\"event-features\">
  <div class=\"feature\"><img src=\"/cadizturismo/storage/app/media/uploaded-files/templates/calendar-event.svg\" class=\"fr-fil fr-dib\">
    
    <p class=\"feature-txt\">{{event.date_start_pretty_num}} - {{event.date_end_pretty_num}}</p>
  </div>
  <div class=\"feature\"><img src=\"/cadizturismo/storage/app/media/uploaded-files/templates/{{str_slug(event.category)}}.svg\" class=\"fr-fil fr-dib\">

    <p class=\"feature-txt\">{{event.category}}</p>
  </div>
  <div class=\"feature\"><img src=\"/cadizturismo/storage/app/media/uploaded-files/templates/location.svg\" class=\"fr-fil fr-dib\">

    <p class=\"feature-txt\">{{event.location}}</p><a class=\"feature-txt-mapa\" href=\"{{event.locationgoogle}}\" target=\"_blank\">Ver mapa</a></div>
</div>", "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/headerevent.htm", "");
    }
}
