<?php

/* /Users/jekyll/workspace/cadizturismo/themes/default/pages/experiences.htm */
class __TwigTemplate_2d0e3ec13ac8068bacf06a6a764d8c43f0bdde585b0f26b41699468dc7750009 extends Twig_Template
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
        echo "<!-- HEADER -->
<div class=\"header-search search-exp\">
  
  <div class=\"header-container big-div\">
    <div id=\"exp-header\" class=\"header-txt\">
      <p class=\"txt\"><span id=\"exp\" class=\"first-word\">Experiencias</span> pensadas para ti </p>
        <img class=\"brush\" src=\"";
        // line 7
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/brush-header.svg\" alt=\"\">
    </div>
    <div class=\"search-bar-container\">
          <div class=\"search-bar\">
            <form data-request=\"onFindExperience\">
              <div class=\"inputs-container\">
                <div class=\"days-container\">
                  <select class=\"custom-select select-days\" name=\"days\">
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "                      ";
            if (($context["i"] < 2)) {
                // line 17
                echo "                      \t* <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " ";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("día"));
                echo "</option>
                      ";
            } else {
                // line 19
                echo "\t\t\t\t\t\t* <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " ";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("días"));
                echo "</option>
                      ";
            }
            // line 21
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                  </select>
                  <span class=\"select-title\">";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("TU ESTANCIA"));
        echo "</span>
                </div>";
        // line 24
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("cadizevent"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 25
        echo "                <div class=\"interests-container\">
                  <select class=\"custom-select select-interests\" name=\"interest\">
                    <option value=\"playa-gastronomia\">";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Playa y gastronomía"));
        echo "</option>
                    <option value=\"cultura-gastronomia\">";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cultura y gastronomía"));
        echo "</option>
                    <option value=\"fiesta-cultura\">";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Fiesta y cultura"));
        echo "</option>
                    <option value=\"gastronomia-naturaleza\">";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Gastronomía y naturaleza"));
        echo "</option>
                    <option value=\"naturaleza-aventura\">";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Naturaleza y aventura"));
        echo "</option>
                    <option value=\"playa-naturaleza\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Playa y naturaleza"));
        echo "</option>
                    <option value=\"vino-tradicion\">";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Vino y tradición"));
        echo "</option>
                    <option value=\"aventura-tradicion\">";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Aventura y tradición"));
        echo "</option>
                  </select>
                  <span class=\"select-title\">";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("INTERESES"));
        echo "</span>
                </div>
                <div class=\"type-container\">
                  <select class=\"custom-select select-type\" name=\"tvisit\">
                    <option value=\"cadiz-oculta\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cádiz oculta"));
        echo "</option>
                    <option value=\"cadiz-autentica\">";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cádiz auténtica"));
        echo "</option>
                    <option value=\"cadiz-relax\">";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cádiz relax"));
        echo "</option>
                    <option value=\"cadiz-urbano\">";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cádiz urbano"));
        echo "</option>
                  </select>
                  <span class=\"select-title\">";
        // line 45
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("TIPO DE VISITA"));
        echo "</span>
                </div>
              </div>
              <div class=\"button-container\">
                <input type=\"submit\" value=\"";
        // line 49
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Ven a Cádiz"));
        echo "\">

              
              </div>
            </form>
          </div>
        </div>
  </div>
</div>

<div id='prtlExperiences' class=\"all-exps\">
\t";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("experiences"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/workspace/cadizturismo/themes/default/pages/experiences.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 61,  164 => 60,  150 => 49,  143 => 45,  138 => 43,  134 => 42,  130 => 41,  126 => 40,  119 => 36,  114 => 34,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 25,  78 => 24,  74 => 23,  71 => 22,  65 => 21,  55 => 19,  45 => 17,  42 => 16,  38 => 15,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- HEADER -->
<div class=\"header-search search-exp\">
  
  <div class=\"header-container big-div\">
    <div id=\"exp-header\" class=\"header-txt\">
      <p class=\"txt\"><span id=\"exp\" class=\"first-word\">Experiencias</span> pensadas para ti </p>
        <img class=\"brush\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/brush-header.svg\" alt=\"\">
    </div>
    <div class=\"search-bar-container\">
          <div class=\"search-bar\">
            <form data-request=\"onFindExperience\">
              <div class=\"inputs-container\">
                <div class=\"days-container\">
                  <select class=\"custom-select select-days\" name=\"days\">
                    {% for i in 1..7 %}
                      {% if i<2 %}
                      \t* <option value=\"{{ i }}\">{{ i }} {{'día'|_}}</option>
                      {% else %}
\t\t\t\t\t\t* <option value=\"{{ i }}\">{{ i }} {{'días'|_}}</option>
                      {% endif %}
                    {% endfor %}
                  </select>
                  <span class=\"select-title\">{{'TU ESTANCIA'|_}}</span>
                </div>{% component 'cadizevent' %}
                <div class=\"interests-container\">
                  <select class=\"custom-select select-interests\" name=\"interest\">
                    <option value=\"playa-gastronomia\">{{'Playa y gastronomía'|_}}</option>
                    <option value=\"cultura-gastronomia\">{{'Cultura y gastronomía'|_}}</option>
                    <option value=\"fiesta-cultura\">{{'Fiesta y cultura'|_}}</option>
                    <option value=\"gastronomia-naturaleza\">{{'Gastronomía y naturaleza'|_}}</option>
                    <option value=\"naturaleza-aventura\">{{'Naturaleza y aventura'|_}}</option>
                    <option value=\"playa-naturaleza\">{{'Playa y naturaleza'|_}}</option>
                    <option value=\"vino-tradicion\">{{'Vino y tradición'|_}}</option>
                    <option value=\"aventura-tradicion\">{{'Aventura y tradición'|_}}</option>
                  </select>
                  <span class=\"select-title\">{{'INTERESES'|_}}</span>
                </div>
                <div class=\"type-container\">
                  <select class=\"custom-select select-type\" name=\"tvisit\">
                    <option value=\"cadiz-oculta\">{{'Cádiz oculta'|_}}</option>
                    <option value=\"cadiz-autentica\">{{'Cádiz auténtica'|_}}</option>
                    <option value=\"cadiz-relax\">{{'Cádiz relax'|_}}</option>
                    <option value=\"cadiz-urbano\">{{'Cádiz urbano'|_}}</option>
                  </select>
                  <span class=\"select-title\">{{'TIPO DE VISITA'|_}}</span>
                </div>
              </div>
              <div class=\"button-container\">
                <input type=\"submit\" value=\"{{'Ven a Cádiz'|_}}\">

              
              </div>
            </form>
          </div>
        </div>
  </div>
</div>

<div id='prtlExperiences' class=\"all-exps\">
\t{% partial \"experiences\" %}
</div>", "/Users/jekyll/workspace/cadizturismo/themes/default/pages/experiences.htm", "");
    }
}
