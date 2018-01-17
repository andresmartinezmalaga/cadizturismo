<?php

/* /Users/jekyll/workspace/cadizturismo/themes/default/layouts/fallback.htm */
class __TwigTemplate_d7457730174ecee0b06707f58af584b6d8b7ca3f4176336ab9e892a26565d47f extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/workspace/cadizturismo/themes/default/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/Users/jekyll/workspace/cadizturismo/themes/default/layouts/fallback.htm", "");
    }
}
