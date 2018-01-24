<?php

/* /Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/header.htm */
class __TwigTemplate_1adea078a1f00488602842c98a48b072e16d75a95565ac302ac7c4a2ab1c431f extends Twig_Template
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
        return "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/header.htm";
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
        return new Twig_Source("{% partial \"site/menu\" %}", "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/header.htm", "");
    }
}
