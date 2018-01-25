<?php

/* /Users/jekyll/Desktop/workspace/cadizturismo/themes/default/pages/404.htm */
class __TwigTemplate_045084204b195c602dce8091bbd8782432713cf384505bd00ec1b2a728e612a1 extends Twig_Template
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
        echo "<div class=\"\">
    <div class=\"container\">
        <h1>404</h1>
        <p>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("¿Estoy ciego?"));
        echo "</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"\">
    <div class=\"container\">
        <h1>404</h1>
        <p>{{'¿Estoy ciego?'|_}}</p>
    </div>
</div>", "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/pages/404.htm", "");
    }
}
