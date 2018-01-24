<?php

/* /Users/jekyll/workspace/cadizturismo/themes/default/partials/beaches.htm */
class __TwigTemplate_d59e8103dad61c108462096cf464914a0f79cf45d69eb91d890c3a9a2191b37b extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["beaches"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["beach"]) {
            // line 2
            echo "\t
\t<div class=\"event\">
\t\t<div class=\"overlay-img\">
\t\t\t<br>
\t\t</div><img class=\"rec-img fr-fic fr-dii\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["beach"], "viewBag", array()), "cover", array()), "html", null, true);
            echo "\">
\t\t<div class=\"txt-container\">

\t\t\t<p class=\"name\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["beach"], "viewBag", array()), "title", array()), "html", null, true);
            echo "</p><img class=\"separator fr-fic fr-dii\" src=\"http://localhost:8888/cadizturismo/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
\t\t\t<div class=\"icons\">
\t\t\t\t<div class=\"icon-pair\">
\t\t\t\t\t<img src=\"";
            // line 12
            echo twig_escape_filter($this->env, ($context["preurl"] ?? null), "html", null, true);
            echo "/storage/app/media/uploaded-files/templates/";
            echo call_user_func_array($this->env->getFunction('str_slug')->getCallable(), array("slug", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["beach"], "viewBag", array()), "categoriea", array())));
            echo ".svg\" class=\"fr-fil fr-dib\">

\t\t\t\t\t<p class=\"icon-txt\">
\t\t\t\t\t\t";
            // line 15
            $context["ityp"] = ("backend::lang.beaches.type." . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["beach"], "viewBag", array()), "categoriea", array()));
            // line 16
            echo "              \t\t\t";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array(($context["ityp"] ?? null)));
            echo "
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"icon-pair\">
\t\t\t\t\t<img src=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["preurl"] ?? null), "html", null, true);
            echo "/storage/app/media/uploaded-files/templates/";
            echo call_user_func_array($this->env->getFunction('str_slug')->getCallable(), array("slug", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["beach"], "viewBag", array()), "categorieb", array())));
            echo ".svg\" class=\"fr-fil fr-dib\">
\t\t\t\t\t<p class=\"icon-txt\">
\t\t\t\t\t\t";
            // line 22
            $context["icat"] = ("backend::lang.beaches.category." . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["beach"], "viewBag", array()), "categorieb", array()));
            // line 23
            echo "              \t\t\t";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array(($context["icat"] ?? null)));
            echo "
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"button-container\"><a class=\"see-event\" href=\"";
            // line 27
            echo url("/");
            echo "/";
            echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["beach"], "viewBag", array()), "url", array()), "html", null, true);
            echo "\">Ver playa <img src=\"http://localhost:8888/cadizturismo/plugins/rainlab/pages/assets/svg/link-icon.svg\" class=\"fr-fic fr-dii\"></a></div>
\t\t</div>
\t</div>
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/workspace/cadizturismo/themes/default/partials/beaches.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  68 => 23,  66 => 22,  59 => 20,  51 => 16,  49 => 15,  41 => 12,  35 => 9,  29 => 6,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for beach in beaches %}
\t
\t<div class=\"event\">
\t\t<div class=\"overlay-img\">
\t\t\t<br>
\t\t</div><img class=\"rec-img fr-fic fr-dii\" src=\"{{beach.viewBag.cover}}\">
\t\t<div class=\"txt-container\">

\t\t\t<p class=\"name\">{{beach.viewBag.title}}</p><img class=\"separator fr-fic fr-dii\" src=\"http://localhost:8888/cadizturismo/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
\t\t\t<div class=\"icons\">
\t\t\t\t<div class=\"icon-pair\">
\t\t\t\t\t<img src=\"{{preurl}}/storage/app/media/uploaded-files/templates/{{str_slug(beach.viewBag.categoriea)}}.svg\" class=\"fr-fil fr-dib\">

\t\t\t\t\t<p class=\"icon-txt\">
\t\t\t\t\t\t{% set ityp = \"backend::lang.beaches.type.\"~beach.viewBag.categoriea %}
              \t\t\t{{ ityp|trans }}
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"icon-pair\">
\t\t\t\t\t<img src=\"{{preurl}}/storage/app/media/uploaded-files/templates/{{str_slug(beach.viewBag.categorieb)}}.svg\" class=\"fr-fil fr-dib\">
\t\t\t\t\t<p class=\"icon-txt\">
\t\t\t\t\t\t{% set icat = \"backend::lang.beaches.category.\"~beach.viewBag.categorieb %}
              \t\t\t{{ icat|trans }}
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"button-container\"><a class=\"see-event\" href=\"{{url('/')}}/{{lang}}{{beach.viewBag.url}}\">Ver playa <img src=\"http://localhost:8888/cadizturismo/plugins/rainlab/pages/assets/svg/link-icon.svg\" class=\"fr-fic fr-dii\"></a></div>
\t\t</div>
\t</div>
\t
{% endfor %}", "/Users/jekyll/workspace/cadizturismo/themes/default/partials/beaches.htm", "");
    }
}
