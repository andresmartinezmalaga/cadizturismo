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
        <h1 class=\"txt txt-home\"><span class=\"first-word\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Vive"));
        echo "</span> ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("nuestros eventos"));
        echo "</h1>
        <img class=\"brush\" src=\"";
        // line 8
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/brush-header.svg\" alt=\"\">
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("allevents"        , $context['__cms_partial_params']        , true        );
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
        return array (  57 => 21,  53 => 20,  45 => 14,  41 => 13,  33 => 8,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- HEADER -->
<div class=\"header header-events\">
  
  <div class=\"header-container\">
      
      <div class=\"header-txt\">
        <h1 class=\"txt txt-home\"><span class=\"first-word\">{{ \"Vive\"|_ }}</span> {{ \"nuestros eventos\"|_ }}</h1>
        <img class=\"brush\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/brush-header.svg\" alt=\"\">
      </div>
   
    <!-- SEARCH -->
    <div id='prtlSearch'>
      {% partial \"site/searchevent\" %}
    </div>

  </div>
</div>

<div id='prtlExperiences' class=\"all-exps\">
\t{% partial \"allevents\" %}
</div>", "/Users/jekyll/workspace/cadizturismo/themes/default/pages/allevents.htm", "");
    }
}
