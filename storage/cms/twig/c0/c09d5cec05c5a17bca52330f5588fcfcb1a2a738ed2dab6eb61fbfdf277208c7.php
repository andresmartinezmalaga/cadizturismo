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
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "              ";
            if (($context["i"] < 2)) {
                // line 10
                echo "              \t* <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " ";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("día"));
                echo "</option>
              ";
            } else {
                // line 12
                echo "\t\t            * <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " ";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("días"));
                echo "</option>
              ";
            }
            // line 14
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "          </select>
          <span class=\"select-title\">";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("TU ESTANCIA"));
        echo "</span>
        </div>
        
        ";
        // line 19
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("cadizevent"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 20
        echo "        
        <div class=\"interests-container\">
          <select class=\"custom-select select-interests\" name=\"interest\">
            <option value=\"playa-gastronomia\">";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Playa y gastronomía"));
        echo "</option>
            <option value=\"cultura-gastronomia\">";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cultura y gastronomía"));
        echo "</option>
            <option value=\"fiesta-cultura\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Fiesta y cultura"));
        echo "</option>
            <option value=\"gastronomia-naturaleza\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Gastronomía y naturaleza"));
        echo "</option>
            <option value=\"naturaleza-aventura\">";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Naturaleza y aventura"));
        echo "</option>
            <option value=\"playa-naturaleza\">";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Playa y naturaleza"));
        echo "</option>
            <option value=\"vino-tradicion\">";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Vino y tradición"));
        echo "</option>
            <option value=\"aventura-tradicion\">";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Aventura y tradición"));
        echo "</option>
          </select>
          <span class=\"select-title\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("INTERESES"));
        echo "</span>
        </div>
        
        <div class=\"type-container\">
          <select class=\"custom-select select-type\" name=\"tvisit\">
            <option value=\"cadiz-oculta\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cádiz oculta"));
        echo "</option>
            <option value=\"cadiz-autentica\">";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cádiz auténtica"));
        echo "</option>
            <option value=\"cadiz-relax\">";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cádiz relax"));
        echo "</option>
            <option value=\"cadiz-urbano\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cádiz urbano"));
        echo "</option>
          </select>
          <span class=\"select-title\">";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("TIPO DE VISITA"));
        echo "</span>
        </div>
      </div>
      
      <div class=\"button-container\">
        <input type=\"submit\" value=\"";
        // line 47
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Ven a Cádiz"));
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
        return array (  145 => 47,  137 => 42,  132 => 40,  128 => 39,  124 => 38,  120 => 37,  112 => 32,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  74 => 20,  70 => 19,  64 => 16,  61 => 15,  55 => 14,  45 => 12,  35 => 10,  32 => 9,  28 => 8,  19 => 1,);
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
              \t* <option value=\"{{ i }}\">{{ i }} {{'día'|_}}</option>
              {% else %}
\t\t            * <option value=\"{{ i }}\">{{ i }} {{ 'días'|_}}</option>
              {% endif %}
            {% endfor %}
          </select>
          <span class=\"select-title\">{{ 'TU ESTANCIA'|_ }}</span>
        </div>
        
        {% component 'cadizevent' %}
        
        <div class=\"interests-container\">
          <select class=\"custom-select select-interests\" name=\"interest\">
            <option value=\"playa-gastronomia\">{{'Playa y gastronomía'|_ }}</option>
            <option value=\"cultura-gastronomia\">{{'Cultura y gastronomía'|_ }}</option>
            <option value=\"fiesta-cultura\">{{'Fiesta y cultura'|_ }}</option>
            <option value=\"gastronomia-naturaleza\">{{'Gastronomía y naturaleza'|_ }}</option>
            <option value=\"naturaleza-aventura\">{{'Naturaleza y aventura'|_ }}</option>
            <option value=\"playa-naturaleza\">{{'Playa y naturaleza'|_ }}</option>
            <option value=\"vino-tradicion\">{{'Vino y tradición'|_ }}</option>
            <option value=\"aventura-tradicion\">{{'Aventura y tradición'|_ }}</option>
          </select>
          <span class=\"select-title\">{{ 'INTERESES'|_ }}</span>
        </div>
        
        <div class=\"type-container\">
          <select class=\"custom-select select-type\" name=\"tvisit\">
            <option value=\"cadiz-oculta\">{{ 'Cádiz oculta'|_ }}</option>
            <option value=\"cadiz-autentica\">{{ 'Cádiz auténtica'|_ }}</option>
            <option value=\"cadiz-relax\">{{ 'Cádiz relax'|_ }}</option>
            <option value=\"cadiz-urbano\">{{ 'Cádiz urbano'|_ }}</option>
          </select>
          <span class=\"select-title\">{{ 'TIPO DE VISITA'|_ }}</span>
        </div>
      </div>
      
      <div class=\"button-container\">
        <input type=\"submit\" value=\"{{ 'Ven a Cádiz'|_ }}\">
      </div>
    </form>
  </div>
</div>", "/Users/jekyll/Workspace/cadizTurismo/themes/default/partials/site/search.htm", "");
    }
}
