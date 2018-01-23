<?php

/* /Users/jekyll/workspace/cadizturismo/plugins/rainlab/pages/components/staticpage/default.htm */
class __TwigTemplate_c0844f30fd5e4092bd7391d1bf01e594121644b6a9e7e6509cba31d41ac2b017 extends Twig_Template
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
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "content", array());
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/workspace/cadizturismo/plugins/rainlab/pages/components/staticpage/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ __SELF__.content|raw }}", "/Users/jekyll/workspace/cadizturismo/plugins/rainlab/pages/components/staticpage/default.htm", "");
    }
}
