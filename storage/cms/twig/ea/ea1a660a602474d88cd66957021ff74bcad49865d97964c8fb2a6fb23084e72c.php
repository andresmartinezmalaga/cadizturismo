<?php

/* /Users/jekyll/workspace/cadizturismo/themes/default/partials/experiences.htm */
class __TwigTemplate_8e72bae203137300a302fb7c16cd7a04990944811cc2b872a89c4d4ad07c59b2 extends Twig_Template
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
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.experiences.page.result1"));
        echo " ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["experiences"] ?? null)), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.experiences.page.result2"));
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
            $context["interest"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "interest", array()), "-");
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
                $context["d"] = call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.experiences.search.day"));
                // line 22
                echo "\t              \t";
            } else {
                // line 23
                echo "\t              \t\t";
                $context["d"] = call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.experiences.search.days"));
                // line 24
                echo "\t              \t";
            }
            // line 25
            echo "              \t\t

\t            <p class=\"icon-txt\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "days", array()), "html", null, true);
            echo " ";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array(($context["d"] ?? null)));
            echo "</p>
\t          </div>          
\t          <div class=\"icon-pair\">
\t            <img src=\"";
            // line 30
            echo url("/");
            echo "/plugins/rainlab/pages/assets/svg/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["interest"] ?? null), 0, array(), "array"), "html", null, true);
            echo ".svg\">
\t              ";
            // line 31
            $context["ia"] = ("backend::lang.experiences.page." . twig_get_attribute($this->env, $this->getSourceContext(), ($context["interest"] ?? null), 0, array(), "array"));
            // line 32
            echo "\t            \t<p class=\"icon-txt\">";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array(($context["ia"] ?? null)));
            echo "</p>
\t          </div>
\t          <div class=\"icon-pair\">
\t            <img src=\"";
            // line 35
            echo url("/");
            echo "/plugins/rainlab/pages/assets/svg/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["interest"] ?? null), 1, array(), "array"), "html", null, true);
            echo ".svg\">
\t            ";
            // line 36
            $context["ib"] = ("backend::lang.experiences.page." . twig_get_attribute($this->env, $this->getSourceContext(), ($context["interest"] ?? null), 1, array(), "array"));
            // line 37
            echo "\t            <p class=\"icon-txt\">";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array(($context["ib"] ?? null)));
            echo "</p>
\t          </div>
\t          <div class=\"icon-pair\">
\t            <img src=\"";
            // line 40
            echo url("/");
            echo "/plugins/rainlab/pages/assets/svg/cultura-event.svg\">
\t            ";
            // line 41
            $context["ty"] = ("backend::lang.experiences.page." . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "tvisit", array()));
            // line 42
            echo "\t            <p class=\"icon-txt\">";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array(($context["ty"] ?? null)));
            echo "</p>
\t          </div>
\t        </div>
\t        <div class=\"button-container\">
\t          <a class=\"see-event\" href=\"";
            // line 46
            echo url("/");
            echo "/";
            echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "url", array()), "html", null, true);
            echo "\"> ";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.experiences.page.experience_link"));
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
        // line 52
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/workspace/cadizturismo/themes/default/partials/experiences.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 52,  136 => 46,  128 => 42,  126 => 41,  122 => 40,  115 => 37,  113 => 36,  107 => 35,  100 => 32,  98 => 31,  92 => 30,  84 => 27,  80 => 25,  77 => 24,  74 => 23,  71 => 22,  68 => 21,  66 => 20,  61 => 18,  55 => 15,  51 => 14,  46 => 12,  41 => 9,  38 => 8,  34 => 7,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"search-title-container\">
    <p class=\"title-search\"> {{ \"backend::lang.experiences.page.result1\"|trans }} {{experiences|length}} {{ \"backend::lang.experiences.page.result2\"|trans }}</p>
</div>

<div class=\"all-events-container\">
\t
\t{% for experience in experiences %}
\t    {% set interest = experience.viewBag.interest|split('-') %}
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
\t              \t\t{% set d = \"backend::lang.experiences.search.day\"|trans %}
\t              \t{% else %}
\t              \t\t{% set d = \"backend::lang.experiences.search.days\"|trans %}
\t              \t{% endif %}
              \t\t

\t            <p class=\"icon-txt\">{{experience.viewBag.days}} {{ d|trans }}</p>
\t          </div>          
\t          <div class=\"icon-pair\">
\t            <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/{{interest[0]}}.svg\">
\t              {% set ia = \"backend::lang.experiences.page.\"~interest[0] %}
\t            \t<p class=\"icon-txt\">{{ia|trans}}</p>
\t          </div>
\t          <div class=\"icon-pair\">
\t            <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/{{interest[1]}}.svg\">
\t            {% set ib = \"backend::lang.experiences.page.\"~interest[1] %}
\t            <p class=\"icon-txt\">{{ib|trans}}</p>
\t          </div>
\t          <div class=\"icon-pair\">
\t            <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/cultura-event.svg\">
\t            {% set ty = \"backend::lang.experiences.page.\"~experience.viewBag.tvisit %}
\t            <p class=\"icon-txt\">{{ty|trans}}</p>
\t          </div>
\t        </div>
\t        <div class=\"button-container\">
\t          <a class=\"see-event\" href=\"{{url('/')}}/{{lang}}{{experience.viewBag.url}}\"> {{ \"backend::lang.experiences.page.experience_link\"|trans }} <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/link-icon.svg\"></a>
\t        </div>
\t      </div>
\t    </div>

\t{% endfor %}

</div>", "/Users/jekyll/workspace/cadizturismo/themes/default/partials/experiences.htm", "");
    }
}
