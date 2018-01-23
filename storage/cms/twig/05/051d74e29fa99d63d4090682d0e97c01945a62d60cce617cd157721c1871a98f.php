<?php

/* /Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/municipalities.htm */
class __TwigTemplate_889623e49656829b4101f69e152d8c4544e35d2cede517006045963bb103a626 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["municipalities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["municipality"]) {
            // line 2
            echo "\t<div class=\"event\">
\t\t\t<div class=\"overlay-img\">
\t\t\t\t<br>
\t\t\t</div><img class=\"rec-img fr-fic fr-dii\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["municipality"], "viewBag", array()), "cover", array()), "html", null, true);
            echo "\">
\t\t\t<div class=\"txt-container\">

\t\t\t\t<p class=\"name\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["municipality"], "viewBag", array()), "title", array()), "html", null, true);
            echo "</p><img class=\"separator separator-mun fr-fic fr-dii\" src=\"http://localhost:8888/cadizturismo/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
\t\t\t\t<div class=\"button-container\"><a class=\"see-event\" href=\"";
            // line 9
            echo url("/");
            echo "/";
            echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["municipality"], "viewBag", array()), "url", array()), "html", null, true);
            echo "\">Conocer municipio <img src=\"http://localhost:8888/cadizturismo/plugins/rainlab/pages/assets/svg/link-icon.svg\" class=\"fr-fic fr-dii\"></a></div>
\t\t\t</div>
\t\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['municipality'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/municipalities.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  34 => 8,  28 => 5,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for municipality in municipalities %}
\t<div class=\"event\">
\t\t\t<div class=\"overlay-img\">
\t\t\t\t<br>
\t\t\t</div><img class=\"rec-img fr-fic fr-dii\" src=\"{{municipality.viewBag.cover}}\">
\t\t\t<div class=\"txt-container\">

\t\t\t\t<p class=\"name\">{{municipality.viewBag.title}}</p><img class=\"separator separator-mun fr-fic fr-dii\" src=\"http://localhost:8888/cadizturismo/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
\t\t\t\t<div class=\"button-container\"><a class=\"see-event\" href=\"{{url('/')}}/{{lang}}{{municipality.viewBag.url}}\">Conocer municipio <img src=\"http://localhost:8888/cadizturismo/plugins/rainlab/pages/assets/svg/link-icon.svg\" class=\"fr-fic fr-dii\"></a></div>
\t\t\t</div>
\t\t</div>
{% endfor %}", "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/municipalities.htm", "");
    }
}
