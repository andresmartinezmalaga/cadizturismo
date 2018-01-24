<?php

/* /Users/jekyll/workspace/cadizturismo/themes/default/partials/site/searchevent.htm */
class __TwigTemplate_509b353a9b2f2734493799a827dd3bbad976586c6e55b45508e66008e74b619f extends Twig_Template
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
            <form action=\"search-event.html\" method=\"post\">
              <div class=\"inputs-container\">
                <div id=\"event-category\" class=\"days-container\">
                  <select class=\"custom-select select-days\" name=\"category\">
                    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 8
            echo "                        ";
            $context["ct"] = ("backend::lang.eventos.category." . $context["key"]);
            // line 9
            echo "                        <option value=";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo ">";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array(($context["ct"] ?? null)));
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "                  </select>
                  <span class=\"select-title\">CATEGORÍA</span>
                </div>
                <div id=\"event-datepicker\" class=\"interests-container\">
                  <input type=\"text\" name=\"datepicker\" id=\"datepicker\" readonly>
                  <span class=\"select-title\">FECHA</span>
                  <img class=\"arrow\" src=\"assets/svg/select-arrow.svg\">
                </div>
                <div id=\"event-location\" class=\"type-container\">
                  <select class=\"custom-select select-type\" name=\"location\">
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["municipalities"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 22
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
        // line 24
        echo "                  </select>
                  <span class=\"select-title\">UBICACIÓN</span>
                </div>
              </div>
              <div class=\"button-container\">
                <input type=\"submit\" value=\"Ver eventos\">
              </div>
            </form>
          </div>
        </div>
        <div class=\"header-comment\">
          <p class=\"comment\">Descubre miles de eventos que no querrás perderte</p>
        </div>
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/workspace/cadizturismo/themes/default/partials/site/searchevent.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  61 => 22,  57 => 21,  45 => 11,  34 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"search-bar-container\">
          <div class=\"search-bar\">
            <form action=\"search-event.html\" method=\"post\">
              <div class=\"inputs-container\">
                <div id=\"event-category\" class=\"days-container\">
                  <select class=\"custom-select select-days\" name=\"category\">
                    {% for key,value in categories %}
                        {% set ct = \"backend::lang.eventos.category.\"~key %}
                        <option value={{key}}>{{ ct|trans }}</option>
                    {% endfor %}
                  </select>
                  <span class=\"select-title\">CATEGORÍA</span>
                </div>
                <div id=\"event-datepicker\" class=\"interests-container\">
                  <input type=\"text\" name=\"datepicker\" id=\"datepicker\" readonly>
                  <span class=\"select-title\">FECHA</span>
                  <img class=\"arrow\" src=\"assets/svg/select-arrow.svg\">
                </div>
                <div id=\"event-location\" class=\"type-container\">
                  <select class=\"custom-select select-type\" name=\"location\">
                    {% for key,value in municipalities %}
                        <option value={{key}}>{{value}}</option>
                    {% endfor %}
                  </select>
                  <span class=\"select-title\">UBICACIÓN</span>
                </div>
              </div>
              <div class=\"button-container\">
                <input type=\"submit\" value=\"Ver eventos\">
              </div>
            </form>
          </div>
        </div>
        <div class=\"header-comment\">
          <p class=\"comment\">Descubre miles de eventos que no querrás perderte</p>
        </div>
      </div>
    </div>", "/Users/jekyll/workspace/cadizturismo/themes/default/partials/site/searchevent.htm", "");
    }
}
