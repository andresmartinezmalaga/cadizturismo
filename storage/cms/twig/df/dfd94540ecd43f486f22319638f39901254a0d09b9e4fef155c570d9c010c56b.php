<?php

/* /Users/jekyll/workspace/cadizturismo/themes/default/partials/site/header.htm */
class __TwigTemplate_c997bfc4d8a659b7a9a385cefb1e610919266a1d9603503b3bc92d8c40da58e2 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/workspace/cadizturismo/themes/default/partials/site/header.htm";
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
        return new Twig_Source("{% partial \"site/menu\" %}", "/Users/jekyll/workspace/cadizturismo/themes/default/partials/site/header.htm", "");
    }
}
