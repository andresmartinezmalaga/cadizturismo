<?php

/* /Users/jekyll/workspace/cadizturismo/themes/default/pages/allevents.htm */
class __TwigTemplate_36170d2790e35bd1f2e426ed7f8cb779bdc9db5fa353209686cb743ac5cd9d42 extends Twig_Template
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
        echo "<!-- HEADER -->
<div class=\"header header-events\">
  
  <div class=\"header-container\">
      
      <div class=\"header-txt\">
        <h1 class=\"txt txt-home\"><span class=\"first-word\">Vive</span> nuestros eventos</h1>
        <img class=\"brush\" src=\"assets/svg/brush-header.svg\" alt=\"\">
      </div>
   
    <!-- SEARCH -->
    <div id='prtlSearch'>
      ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/searchevent"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "    </div>

  </div>
</div>

<div id='prtlExperiences' class=\"all-exps\">
\t";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("experiences"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/workspace/cadizturismo/themes/default/pages/allevents.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 21,  45 => 20,  37 => 14,  33 => 13,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- HEADER -->
<div class=\"header header-events\">
  
  <div class=\"header-container\">
      
      <div class=\"header-txt\">
        <h1 class=\"txt txt-home\"><span class=\"first-word\">Vive</span> nuestros eventos</h1>
        <img class=\"brush\" src=\"assets/svg/brush-header.svg\" alt=\"\">
      </div>
   
    <!-- SEARCH -->
    <div id='prtlSearch'>
      {% partial \"site/searchevent\" %}
    </div>

  </div>
</div>

<div id='prtlExperiences' class=\"all-exps\">
\t{% partial \"experiences\" %}
</div>", "/Users/jekyll/workspace/cadizturismo/themes/default/pages/allevents.htm", "");
    }
}
