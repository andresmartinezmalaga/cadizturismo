<?php

/* /Users/jekyll/Workspace/cadizTurismo/themes/default/partials/site/search.htm */
class __TwigTemplate_fc7428cb50b3921a611d211cdbac065d64fc7fb5ce040b4b543885ce4ff4e232 extends Twig_Template
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
        echo "<div class=\"search-bar-container\">
  <div class=\"search-bar\">
    <form data-request=\"onFindExperience\">
      <div class=\"inputs-container\">
        <div class=\"days-container\">
          <select class=\"custom-select select-days\" name=\"days\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            echo "              ";
            if (($context["i"] < 2)) {
                // line 9
                echo "              \t* <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 0, array(), "array"), "html", null, true);
                echo "</option>
              ";
            } else {
                // line 11
                echo "\t\t* <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 1, array(), "array"), "html", null, true);
                echo "</option>
              ";
            }
            // line 13
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "          </select>
          <span class=\"select-title\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 2, array(), "array"), "html", null, true);
        echo "</span>
        </div>";
        // line 16
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("cadizevent"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "        <div class=\"interests-container\">
          <select class=\"custom-select select-interests\" name=\"interest\">
            <option value=\"playa-gastronomia\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 3, array(), "array"), "html", null, true);
        echo "</option>
            <option value=\"cultura-gastronomia\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 4, array(), "array"), "html", null, true);
        echo "</option>
            <option value=\"fiesta-cultura\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 5, array(), "array"), "html", null, true);
        echo "</option>
            <option value=\"gastronomia-naturaleza\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 6, array(), "array"), "html", null, true);
        echo "</option>
            <option value=\"naturaleza-aventura\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 7, array(), "array"), "html", null, true);
        echo "</option>
            <option value=\"playa-naturaleza\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 8, array(), "array"), "html", null, true);
        echo "</option>
            <option value=\"vino-tradicion\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 9, array(), "array"), "html", null, true);
        echo "</option>
            <option value=\"aventura-tradicion\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 10, array(), "array"), "html", null, true);
        echo "</option>
          </select>
          <span class=\"select-title\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 11, array(), "array"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"type-container\">
          <select class=\"custom-select select-type\" name=\"tvisit\">
            <option value=\"cadiz-oculta\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 12, array(), "array"), "html", null, true);
        echo "</option>
            <option value=\"cadiz-autentica\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 13, array(), "array"), "html", null, true);
        echo "</option>
            <option value=\"cadiz-relax\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 14, array(), "array"), "html", null, true);
        echo "</option>
            <option value=\"cadiz-urbano\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 15, array(), "array"), "html", null, true);
        echo "</option>
          </select>
          <span class=\"select-title\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 16, array(), "array"), "html", null, true);
        echo "</span>
        </div>
      </div>
      <div class=\"button-container\">
        <input type=\"submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationSearch"] ?? null), 17, array(), "array"), "html", null, true);
        echo "\">

      
      </div>
    </form>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/Workspace/cadizTurismo/themes/default/partials/site/search.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 41,  132 => 37,  127 => 35,  123 => 34,  119 => 33,  115 => 32,  108 => 28,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 17,  67 => 16,  63 => 15,  60 => 14,  54 => 13,  44 => 11,  34 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"search-bar-container\">
  <div class=\"search-bar\">
    <form data-request=\"onFindExperience\">
      <div class=\"inputs-container\">
        <div class=\"days-container\">
          <select class=\"custom-select select-days\" name=\"days\">
            {% for i in 1..7 %}
              {% if i<2 %}
              \t* <option value=\"{{ i }}\">{{ i }} {{ translationSearch[0] }}</option>
              {% else %}
\t\t* <option value=\"{{ i }}\">{{ i }} {{ translationSearch[1] }}</option>
              {% endif %}
            {% endfor %}
          </select>
          <span class=\"select-title\">{{ translationSearch[2] }}</span>
        </div>{% component 'cadizevent' %}
        <div class=\"interests-container\">
          <select class=\"custom-select select-interests\" name=\"interest\">
            <option value=\"playa-gastronomia\">{{ translationSearch[3] }}</option>
            <option value=\"cultura-gastronomia\">{{ translationSearch[4] }}</option>
            <option value=\"fiesta-cultura\">{{ translationSearch[5] }}</option>
            <option value=\"gastronomia-naturaleza\">{{ translationSearch[6] }}</option>
            <option value=\"naturaleza-aventura\">{{ translationSearch[7] }}</option>
            <option value=\"playa-naturaleza\">{{ translationSearch[8] }}</option>
            <option value=\"vino-tradicion\">{{ translationSearch[9] }}</option>
            <option value=\"aventura-tradicion\">{{ translationSearch[10] }}</option>
          </select>
          <span class=\"select-title\">{{ translationSearch[11] }}</span>
        </div>
        <div class=\"type-container\">
          <select class=\"custom-select select-type\" name=\"tvisit\">
            <option value=\"cadiz-oculta\">{{ translationSearch[12] }}</option>
            <option value=\"cadiz-autentica\">{{ translationSearch[13] }}</option>
            <option value=\"cadiz-relax\">{{ translationSearch[14] }}</option>
            <option value=\"cadiz-urbano\">{{ translationSearch[15] }}</option>
          </select>
          <span class=\"select-title\">{{ translationSearch[16] }}</span>
        </div>
      </div>
      <div class=\"button-container\">
        <input type=\"submit\" value=\"{{ translationSearch[17] }}\">

      
      </div>
    </form>
  </div>
</div>", "/Users/jekyll/Workspace/cadizTurismo/themes/default/partials/site/search.htm", "");
    }
}
