<?php

/* /Users/jekyll/Desktop/workspace/cadizturismo/themes/default/pages/experiences.htm */
class __TwigTemplate_804691920ccce382cb8a1f6a5e517571157a4ced68b653219d6778875262528e extends Twig_Template
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
<div class=\"header-search search-exp\">
  
  <div class=\"header-container big-div\">
    <div id=\"exp-header\" class=\"header-txt\">
      <p class=\"txt\"><span id=\"exp\" class=\"first-word\">Experiencias</span> pensadas para ti </p>
        <img class=\"brush\" src=\"";
        // line 7
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/brush-header.svg\" alt=\"\">
    </div>
   
    <!-- SEARCH -->
    <div id='prtlSearch'>
      ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/search"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "    </div>

  </div>
</div>

<div id='prtlExperiences' class=\"all-exps\">
\t";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("experiences"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/pages/experiences.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 20,  47 => 19,  39 => 13,  35 => 12,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- HEADER -->
<div class=\"header-search search-exp\">
  
  <div class=\"header-container big-div\">
    <div id=\"exp-header\" class=\"header-txt\">
      <p class=\"txt\"><span id=\"exp\" class=\"first-word\">Experiencias</span> pensadas para ti </p>
        <img class=\"brush\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/brush-header.svg\" alt=\"\">
    </div>
   
    <!-- SEARCH -->
    <div id='prtlSearch'>
      {% partial \"site/search\" %}
    </div>

  </div>
</div>

<div id='prtlExperiences' class=\"all-exps\">
\t{% partial \"experiences\" %}
</div>", "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/pages/experiences.htm", "");
    }
}
