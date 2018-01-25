<?php

/* /Users/jekyll/Workspace/cadizturismo/plugins/rainlab/pages/components/staticpage/default.htm */
class __TwigTemplate_1d4671b225aa5caa9c73912d8fcc3db5d083c132c3468f5bdfa1b26f22d63528 extends Twig_Template
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
        return "/Users/jekyll/Workspace/cadizturismo/plugins/rainlab/pages/components/staticpage/default.htm";
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
        return new Twig_Source("{{ __SELF__.content|raw }}", "/Users/jekyll/Workspace/cadizturismo/plugins/rainlab/pages/components/staticpage/default.htm", "");
    }
}
