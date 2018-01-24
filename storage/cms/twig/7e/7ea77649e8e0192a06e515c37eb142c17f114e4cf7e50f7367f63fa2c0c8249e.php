<?php

/* /Users/jekyll/workspace/cadizturismo/themes/default/pages/experiences.htm */
class __TwigTemplate_2d0e3ec13ac8068bacf06a6a764d8c43f0bdde585b0f26b41699468dc7750009 extends Twig_Template
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
      <p class=\"txt\"><span id=\"exp\" class=\"first-word\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.experiences.page.h1"));
        echo "</span>";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.experiences.page.comment"));
        echo "</p>
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
        return "/Users/jekyll/workspace/cadizturismo/themes/default/pages/experiences.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  52 => 19,  44 => 13,  40 => 12,  32 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- HEADER -->
<div class=\"header-search search-exp\">
  
  <div class=\"header-container big-div\">
    <div id=\"exp-header\" class=\"header-txt\">
      <p class=\"txt\"><span id=\"exp\" class=\"first-word\">{{ \"backend::lang.experiences.page.h1\"|trans }}</span>{{ \"backend::lang.experiences.page.comment\"|trans }}</p>
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
</div>", "/Users/jekyll/workspace/cadizturismo/themes/default/pages/experiences.htm", "");
    }
}
