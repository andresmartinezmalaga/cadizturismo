<?php

/* /Users/jekyll/Desktop/workspace/cadizturismo/plugins/rainlab/pages/components/staticpage/default.htm */
class __TwigTemplate_81a365c253ece383bc11fe0cbc4de366bd2d0131f835797cd384eb3b9b0b37d7 extends Twig_Template
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
        return "/Users/jekyll/Desktop/workspace/cadizturismo/plugins/rainlab/pages/components/staticpage/default.htm";
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
        return new Twig_Source("{{ __SELF__.content|raw }}", "/Users/jekyll/Desktop/workspace/cadizturismo/plugins/rainlab/pages/components/staticpage/default.htm", "");
    }
}
