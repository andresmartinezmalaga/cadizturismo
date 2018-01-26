<?php

/* /Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/experiences.htm */
class __TwigTemplate_811e0951f3245dd389e1b9c9e2af5ac3640711e9313bc9d192f25772756769f7 extends Twig_Template
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
        echo "<div class=\"search-title-container\">
    <p class=\"title-search\"> ";
        // line 2
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Hemos encontrado"));
        echo " ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["experiences"] ?? null)), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("experiencias que se adaptan ti"));
        echo "</p>
</div>

<div class=\"all-events-container\">
\t
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["experiences"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 8
            echo "\t    ";
            $context["interest"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "interest", array()), "y");
            // line 9
            echo "   \t
\t    <div class=\"event\">
\t      <div class=\"overlay-img\"></div>
\t      <img class=\"rec-img\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "cover", array()), "html", null, true);
            echo "\">
\t      <div class=\"txt-container\">
\t        <p class=\"name\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "title", array()), "html", null, true);
            echo "</p>
\t        <img class=\"separator\" src=\"";
            // line 15
            echo url("/");
            echo "/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
\t        <div class=\"icons\">
\t          <div class=\"icon-pair\">
\t            <img src=\"";
            // line 18
            echo url("/");
            echo "/plugins/rainlab/pages/assets/svg/calendar-exp.svg\">
\t            \t
\t            \t";
            // line 20
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "days", array()) < 2)) {
                // line 21
                echo "\t              \t\t";
                $context["d"] = "día";
                // line 22
                echo "\t              \t";
            } else {
                // line 23
                echo "\t              \t\t";
                $context["d"] = "días";
                // line 24
                echo "\t              \t";
            }
            // line 25
            echo "              \t\t

\t            <p class=\"icon-txt\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "days", array()), "html", null, true);
            echo " ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(($context["d"] ?? null)));
            echo "</p>
\t          </div>          
\t          <div class=\"icon-pair\">
\t            <img src=\"";
            // line 30
            echo url("/");
            echo "/plugins/rainlab/pages/assets/svg/";
            echo call_user_func_array($this->env->getFunction('str_slug')->getCallable(), array("slug", twig_get_attribute($this->env, $this->getSourceContext(), ($context["interest"] ?? null), 0, array(), "array")));
            echo ".svg\">
\t            \t<p class=\"icon-txt\">";
            // line 31
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), ($context["interest"] ?? null), 0, array(), "array")));
            echo "</p>
\t          </div>
\t          <div class=\"icon-pair\">
\t            <img src=\"";
            // line 34
            echo url("/");
            echo "/plugins/rainlab/pages/assets/svg/";
            echo call_user_func_array($this->env->getFunction('str_slug')->getCallable(), array("slug", twig_get_attribute($this->env, $this->getSourceContext(), ($context["interest"] ?? null), 1, array(), "array")));
            echo ".svg\">
\t            <p class=\"icon-txt\">";
            // line 35
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), ($context["interest"] ?? null), 1, array(), "array")));
            echo "</p>
\t          </div>
\t          <div class=\"icon-pair\">
\t            <img src=\"";
            // line 38
            echo url("/");
            echo "/plugins/rainlab/pages/assets/svg/cultura-event.svg\">
\t            <p class=\"icon-txt\">";
            // line 39
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "tvisit", array())));
            echo "</p>
\t          </div>
\t        </div>
\t        <div class=\"button-container\">
\t          <a class=\"see-event\" href=\"";
            // line 43
            echo url("/");
            echo "/";
            echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "url", array()), "html", null, true);
            echo "\"> ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Ver experiencia"));
            echo " <img src=\"";
            echo url("/");
            echo "/plugins/rainlab/pages/assets/svg/link-icon.svg\"></a>
\t        </div>
\t      </div>
\t    </div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/experiences.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 49,  127 => 43,  120 => 39,  116 => 38,  110 => 35,  104 => 34,  98 => 31,  92 => 30,  84 => 27,  80 => 25,  77 => 24,  74 => 23,  71 => 22,  68 => 21,  66 => 20,  61 => 18,  55 => 15,  51 => 14,  46 => 12,  41 => 9,  38 => 8,  34 => 7,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"search-title-container\">
    <p class=\"title-search\"> {{ 'Hemos encontrado'|_ }} {{experiences|length}} {{ 'experiencias que se adaptan ti'|_ }}</p>
</div>

<div class=\"all-events-container\">
\t
\t{% for experience in experiences %}
\t    {% set interest = experience.viewBag.interest|split('y') %}
   \t
\t    <div class=\"event\">
\t      <div class=\"overlay-img\"></div>
\t      <img class=\"rec-img\" src=\"{{experience.viewBag.cover}}\">
\t      <div class=\"txt-container\">
\t        <p class=\"name\">{{experience.viewBag.title}}</p>
\t        <img class=\"separator\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
\t        <div class=\"icons\">
\t          <div class=\"icon-pair\">
\t            <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/calendar-exp.svg\">
\t            \t
\t            \t{% if experience.viewBag.days < 2 %}
\t              \t\t{% set d = \"día\" %}
\t              \t{% else %}
\t              \t\t{% set d = \"días\" %}
\t              \t{% endif %}
              \t\t

\t            <p class=\"icon-txt\">{{experience.viewBag.days}} {{ d|_ }}</p>
\t          </div>          
\t          <div class=\"icon-pair\">
\t            <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/{{str_slug(interest[0])}}.svg\">
\t            \t<p class=\"icon-txt\">{{interest[0]|_}}</p>
\t          </div>
\t          <div class=\"icon-pair\">
\t            <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/{{str_slug(interest[1])}}.svg\">
\t            <p class=\"icon-txt\">{{interest[1]|_}}</p>
\t          </div>
\t          <div class=\"icon-pair\">
\t            <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/cultura-event.svg\">
\t            <p class=\"icon-txt\">{{experience.viewBag.tvisit|_}}</p>
\t          </div>
\t        </div>
\t        <div class=\"button-container\">
\t          <a class=\"see-event\" href=\"{{url('/')}}/{{lang}}{{experience.viewBag.url}}\"> {{'Ver experiencia'|_}} <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/link-icon.svg\"></a>
\t        </div>
\t      </div>
\t    </div>

\t{% endfor %}

</div>", "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/experiences.htm", "");
    }
}
