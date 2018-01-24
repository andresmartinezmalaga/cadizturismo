<?php

/* /Users/jekyll/Workspace/cadizTurismo/plugins/rainlab/pages/components/staticpage/default.htm */
class __TwigTemplate_f427ff6b1d0dba5d53ed291cac5162c95d560a69f311e83fcf549631453ad45c extends Twig_Template
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
        return "/Users/jekyll/Workspace/cadizTurismo/plugins/rainlab/pages/components/staticpage/default.htm";
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
        return new Twig_Source("{{ __SELF__.content|raw }}", "/Users/jekyll/Workspace/cadizTurismo/plugins/rainlab/pages/components/staticpage/default.htm", "");
    }
}
