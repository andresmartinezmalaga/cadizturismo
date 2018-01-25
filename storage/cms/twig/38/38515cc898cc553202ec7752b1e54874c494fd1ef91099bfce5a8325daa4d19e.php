<?php

/* /Users/jekyll/workspace/cadizturismo/themes/default/partials/site/headerevent.htm */
class __TwigTemplate_278a41aaa45c93aaeeadae3e41b00bf4ece095b9dbe9d669d3c49f94a260c934 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/workspace/cadizturismo/themes/default/partials/site/headerevent.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- MENU-->
{% partial \"site/menu\" %}", "/Users/jekyll/workspace/cadizturismo/themes/default/partials/site/headerevent.htm", "");
    }
}
