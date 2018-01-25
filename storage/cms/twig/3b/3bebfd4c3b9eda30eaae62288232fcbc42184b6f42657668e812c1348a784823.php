<?php

/* /Users/jekyll/Workspace/cadizTurismo/themes/default/partials/site/searchevent.htm */
class __TwigTemplate_73590df902a7dd238fa446e34d75b9700784cc113c4282a52eec0fe16a75b238 extends Twig_Template
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
        echo "<script>
    
    var calendarTranslate = {
        enero: \"";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("enero"));
        echo "\",
        febrero: \"";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("febrero"));
        echo "\",
        marzo: \"";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("marzo"));
        echo "\",
        abril: \"";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("abril"));
        echo "\",
        mayo: \"";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("mayo"));
        echo "\",
        junio: \"";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("junio"));
        echo "\",
        julio: \"";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("julio"));
        echo "\",
        agosto: \"";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("agosto"));
        echo "\",
        septiembre: \"";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("septiembre"));
        echo "\",
        octubre: \"";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("octubre"));
        echo "\",
        noviembre: \"";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("noviembre"));
        echo "\",
        diciembre: \"";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("diciembre"));
        echo "\"
    };
    
</script>

<div class=\"search-bar-container\">
          <div class=\"search-bar\">
            <form data-request=\"onFindEvent\">
              <div class=\"inputs-container\">
                <div id=\"event-category\" class=\"days-container\">
                  <select class=\"custom-select select-days\" name=\"category\">
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 27
            echo "                        <option value=";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo ">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array($context["value"]));
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                  </select>
                  <span class=\"select-title\">";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("CATEGORÍA"));
        echo "</span>
                </div>
                <div id=\"event-datepicker\" class=\"interests-container\">
                  <input type=\"text\" name=\"datepicker\" id=\"datepicker\" readonly>
                  <span class=\"select-title\">";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("FECHA"));
        echo "</span>
                  <img class=\"arrow\" src=\"";
        // line 35
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/select-arrow.svg\">
                </div>
                <div id=\"event-location\" class=\"type-container\">
                  <select class=\"custom-select select-type\" name=\"location\">
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["municipalities"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 40
            echo "                        <option value=";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                  </select>
                  <span class=\"select-title\">";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("UBICACIÓN"));
        echo "</span>
                </div>
              </div>
              <div class=\"button-container\">
                <input type=\"submit\" value=\"";
        // line 47
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Ver eventos"));
        echo "\">
              </div>
            </form>
          </div>
        </div>
        <div class=\"header-comment\">
          <p class=\"comment\">";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Descubre miles de eventos que no querrás perderte"));
        echo "</p>
        </div>
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/Workspace/cadizTurismo/themes/default/partials/site/searchevent.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 53,  143 => 47,  136 => 43,  133 => 42,  122 => 40,  118 => 39,  111 => 35,  107 => 34,  100 => 30,  97 => 29,  86 => 27,  82 => 26,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    
    var calendarTranslate = {
        enero: \"{{ 'enero'|_ }}\",
        febrero: \"{{ 'febrero'|_ }}\",
        marzo: \"{{ 'marzo'|_ }}\",
        abril: \"{{ 'abril'|_ }}\",
        mayo: \"{{ 'mayo'|_ }}\",
        junio: \"{{ 'junio'|_ }}\",
        julio: \"{{ 'julio'|_ }}\",
        agosto: \"{{ 'agosto'|_ }}\",
        septiembre: \"{{ 'septiembre'|_ }}\",
        octubre: \"{{ 'octubre'|_ }}\",
        noviembre: \"{{ 'noviembre'|_ }}\",
        diciembre: \"{{ 'diciembre'|_ }}\"
    };
    
</script>

<div class=\"search-bar-container\">
          <div class=\"search-bar\">
            <form data-request=\"onFindEvent\">
              <div class=\"inputs-container\">
                <div id=\"event-category\" class=\"days-container\">
                  <select class=\"custom-select select-days\" name=\"category\">
                    {% for key,value in categories %}
                        <option value={{key}}>{{ value |_ }}</option>
                    {% endfor %}
                  </select>
                  <span class=\"select-title\">{{ 'CATEGORÍA'|_ }}</span>
                </div>
                <div id=\"event-datepicker\" class=\"interests-container\">
                  <input type=\"text\" name=\"datepicker\" id=\"datepicker\" readonly>
                  <span class=\"select-title\">{{ 'FECHA'|_ }}</span>
                  <img class=\"arrow\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/select-arrow.svg\">
                </div>
                <div id=\"event-location\" class=\"type-container\">
                  <select class=\"custom-select select-type\" name=\"location\">
                    {% for key,value in municipalities %}
                        <option value={{key}}>{{value}}</option>
                    {% endfor %}
                  </select>
                  <span class=\"select-title\">{{ 'UBICACIÓN'|_ }}</span>
                </div>
              </div>
              <div class=\"button-container\">
                <input type=\"submit\" value=\"{{ 'Ver eventos'|_ }}\">
              </div>
            </form>
          </div>
        </div>
        <div class=\"header-comment\">
          <p class=\"comment\">{{ 'Descubre miles de eventos que no querrás perderte'|_ }}</p>
        </div>
      </div>
    </div>", "/Users/jekyll/Workspace/cadizTurismo/themes/default/partials/site/searchevent.htm", "");
    }
}
