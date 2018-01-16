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
    <p class=\"title-search\">Hemos encontrado ";
        // line 2
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["experiences"] ?? null)), "html", null, true);
        echo " experiencias que se adaptan a ti</p>
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
            echo "\t    
\t    <div class=\"event\">
\t    \t";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "cover", array()), "html", null, true);
            echo "
\t      <div class=\"overlay-img\"></div>
\t      <img class=\"rec-img\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "cover", array()), "html", null, true);
            echo "\">
\t      <div class=\"txt-container\">
\t        <p class=\"name\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "title", array()), "html", null, true);
            echo "</p>
\t        <img class=\"separator\" src=\"";
            // line 16
            echo url("/");
            echo "/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
\t        <div class=\"icons\">
\t          <div class=\"icon-pair\">
\t            <img src=\"";
            // line 19
            echo url("/");
            echo "/plugins/rainlab/pages/assets/svg/calendar-exp.svg\">
\t            <p class=\"icon-txt\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "days", array()), "html", null, true);
            echo " días</p>
\t          </div>          
\t          <div class=\"icon-pair\">
\t            <img src=\"";
            // line 23
            echo url("/");
            echo "/plugins/rainlab/pages/assets/svg/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["interest"] ?? null), 0, array(), "array"), "html", null, true);
            echo ".svg\">
\t            <p class=\"icon-txt\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["interest"] ?? null), 0, array(), "array"), "html", null, true);
            echo "</p>
\t          </div>
\t          <div class=\"icon-pair\">
\t            <img src=\"";
            // line 27
            echo url("/");
            echo "/plugins/rainlab/pages/assets/svg/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["interest"] ?? null), 1, array(), "array"), "html", null, true);
            echo ".svg\">
\t            <p class=\"icon-txt\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["interest"] ?? null), 1, array(), "array"), "html", null, true);
            echo "</p>
\t          </div>
\t          <div class=\"icon-pair\">
\t            <img src=\"";
            // line 31
            echo url("/");
            echo "/plugins/rainlab/pages/assets/svg/cultura-event.svg\">
\t            <p class=\"icon-txt\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "tvisit", array()), "html", null, true);
            echo "</p>
\t          </div>
\t        </div>
\t        <div class=\"button-container\">
\t          <a class=\"see-event\" href=\"";
            // line 36
            echo url("/");
            echo "/";
            echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["experience"], "viewBag", array()), "url", array()), "html", null, true);
            echo "\">Ver experiencia <img src=\"";
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
        // line 42
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
        return array (  123 => 42,  106 => 36,  99 => 32,  95 => 31,  89 => 28,  83 => 27,  77 => 24,  71 => 23,  65 => 20,  61 => 19,  55 => 16,  51 => 15,  46 => 13,  41 => 11,  37 => 9,  34 => 8,  30 => 7,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"search-title-container\">
    <p class=\"title-search\">Hemos encontrado {{experiences|length}} experiencias que se adaptan a ti</p>
</div>

<div class=\"all-events-container\">
\t
\t{% for experience in experiences %}
\t    {% set interest = experience.viewBag.interest|split('-') %}
\t    
\t    <div class=\"event\">
\t    \t{{experience.viewBag.cover}}
\t      <div class=\"overlay-img\"></div>
\t      <img class=\"rec-img\" src=\"{{experience.viewBag.cover}}\">
\t      <div class=\"txt-container\">
\t        <p class=\"name\">{{experience.viewBag.title}}</p>
\t        <img class=\"separator\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
\t        <div class=\"icons\">
\t          <div class=\"icon-pair\">
\t            <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/calendar-exp.svg\">
\t            <p class=\"icon-txt\">{{experience.viewBag.days}} días</p>
\t          </div>          
\t          <div class=\"icon-pair\">
\t            <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/{{interest[0]}}.svg\">
\t            <p class=\"icon-txt\">{{interest[0]}}</p>
\t          </div>
\t          <div class=\"icon-pair\">
\t            <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/{{interest[1]}}.svg\">
\t            <p class=\"icon-txt\">{{interest[1]}}</p>
\t          </div>
\t          <div class=\"icon-pair\">
\t            <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/cultura-event.svg\">
\t            <p class=\"icon-txt\">{{experience.viewBag.tvisit}}</p>
\t          </div>
\t        </div>
\t        <div class=\"button-container\">
\t          <a class=\"see-event\" href=\"{{url('/')}}/{{lang}}{{experience.viewBag.url}}\">Ver experiencia <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/link-icon.svg\"></a>
\t        </div>
\t      </div>
\t    </div>

\t{% endfor %}

</div>", "/Users/jekyll/workspace/cadizturismo/themes/default/partials/experiences.htm", "");
    }
}
