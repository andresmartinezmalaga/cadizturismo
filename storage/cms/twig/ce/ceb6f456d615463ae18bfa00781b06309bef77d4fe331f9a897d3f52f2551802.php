<?php

/* /Users/jekyll/workspace/cadizturismo/themes/default/pages/home.htm */
class __TwigTemplate_4f75da0cf5fbe5d6a2d1e0b2a8f1c8b55d2c0ab6dda3c39736b417af44e89c3b extends Twig_Template
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
    <div class=\"header header-home\">
      <div class=\"header-container\">
        <div class=\"header-txt\">
          <h1 class=\"txt txt-home\"><span class=\"first-word\">
           ";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Playas"));
        echo "
            </span>";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("que te llenan de luz"));
        echo "</h1>
          <img class=\"brush\" src=\"";
        // line 8
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
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "                      ";
            if (($context["i"] < 2)) {
                // line 18
                echo "                      \t* <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " ";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("día"));
                echo "</option>
                      ";
            } else {
                // line 20
                echo "\t\t\t\t\t\t* <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " ";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("días"));
                echo "</option>
                      ";
            }
            // line 22
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                  </select>
                  <span class=\"select-title\">";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("TU ESTANCIA"));
        echo "</span>
                </div>";
        // line 25
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("cadizevent"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "                <div class=\"interests-container\">
                  <select class=\"custom-select select-interests\" name=\"interest\">
                    <option value=\"playa-gastronomia\">";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Playa y gastronomía"));
        echo "</option>
                    <option value=\"cultura-gastronomia\">";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cultura y gastronomía"));
        echo "</option>
                    <option value=\"fiesta-cultura\">";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Fiesta y cultura"));
        echo "</option>
                    <option value=\"gastronomia-naturaleza\">";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Gastronomía y naturaleza"));
        echo "</option>
                    <option value=\"naturaleza-aventura\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Naturaleza y aventura"));
        echo "</option>
                    <option value=\"playa-naturaleza\">";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Playa y naturaleza"));
        echo "</option>
                    <option value=\"vino-tradicion\">";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Vino y tradición"));
        echo "</option>
                    <option value=\"aventura-tradicion\">";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Aventura y tradición"));
        echo "</option>
                  </select>
                  <span class=\"select-title\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("INTERESES"));
        echo "</span>
                </div>
                <div class=\"type-container\">
                  <select class=\"custom-select select-type\" name=\"tvisit\">
                    <option value=\"cadiz-oculta\">";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cádiz oculta"));
        echo "</option>
                    <option value=\"cadiz-autentica\">";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cádiz auténtica"));
        echo "</option>
                    <option value=\"cadiz-relax\">";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cádiz relax"));
        echo "</option>
                    <option value=\"cadiz-urbano\">";
        // line 44
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cádiz urbano"));
        echo "</option>
                  </select>
                  <span class=\"select-title\">";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("TIPO DE VISITA"));
        echo "</span>
                </div>
              </div>
              <div class=\"button-container\">
                <input type=\"submit\" value=\"";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Ven a Cádiz"));
        echo "\">

              
              </div>
            </form>
          </div>
        </div>
        <div class=\"header-comment\">
          <p class=\"comment\">";
        // line 58
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("138km de playas, calas y ensenadas que invitan a perderse"));
        echo "</p>
          <a class=\"header-link\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/playas\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Conoce nuestras playas"));
        echo " &nbsp;<img src=\"";
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/link-arrow.svg\" alt=\"\"> </a>
        </div>
      </div>
    </div>

    <!-- QUÉ SE CUECE -->
    <div class=\"whats-on\">

      <div class=\"left-txt\">
        <p class=\"title\">";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Qué se cuece hoy en Cádiz"));
        echo "</p>
          <img class=\"separator\" src=\"";
        // line 69
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">

          ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["iEvent"]) {
            // line 72
            echo "            <div class=\"event\">
              <p class=\"event-date\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["iEvent"], "date_start_pretty", array(), "array"), "html", null, true);
            echo "</p>
              <p class=\"event-place\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["iEvent"], "place", array(), "array"), "html", null, true);
            echo "</p>
              <a href=\"jornadas-micologicas.html\" class=\"event-name\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["iEvent"], "title", array(), "array"), "html", null, true);
            echo "</a>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iEvent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
            <a class=\"events-link\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/eventos\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Todos los eventos"));
        echo "&nbsp;&nbsp;<img src=\"";
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg\" alt=\"\"> </a>
      </div>


      <div class=\"right-photos\">
        <!-- DIRECCIÓN 1º ARRIBA-ABAJO 2º IZQUIERDA-DERECHA -->

        <a href=\"carreras-caballos.html\">
          <div id=\"element1\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 0, array(), "array"), "image", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"txt-container\">
              <p class=\"date\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 0, array(), "array"), "date_start_pretty", array(), "array"), "html", null, true);
        echo "</p>
              <p class=\"name\">";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 0, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</p>
              <img class=\"separator\" src=\"";
        // line 93
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div id=\"element2\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 1, array(), "array"), "image", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"txt-container\">
              <p class=\"date\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 1, array(), "array"), "date_start_pretty", array(), "array"), "html", null, true);
        echo "</p>
              <p class=\"name\">";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 1, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</p>
              <img class=\"separator\" src=\"";
        // line 104
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div id=\"element3\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 2, array(), "array"), "image", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"txt-container\">
              <p class=\"date\">";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 2, array(), "array"), "date_start_pretty", array(), "array"), "html", null, true);
        echo "</p>
              <p class=\"name\">";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 2, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</p>
              <img class=\"separator\" src=\"";
        // line 115
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div id=\"element4\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 3, array(), "array"), "image", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"txt-container\">
              <p class=\"date\">";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 3, array(), "array"), "date_start_pretty", array(), "array"), "html", null, true);
        echo "</p>
              <p class=\"name\">";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 3, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</p>
              <img class=\"separator\" src=\"";
        // line 126
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
      </div>
    </div>

    <!--  RUTAS -->
    <div class=\"secret-routes\">
      <div class=\"txt-container\">
        <p class=\"title\">";
        // line 136
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("rutas secretas"));
        echo "</p>
        <p class=\"desc\">";
        // line 137
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("¿Eres de emociones fuertes? Disfruta de Cádiz como nunca antes."));
        echo "</p>
        <a class=\"events-link\" href=\"";
        // line 138
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/rutas\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Selección de rutas secretas"));
        echo "<img src=\"";
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg\" alt=\"\"> </a>
        <img class=\"separator\" src=\"";
        // line 139
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/workspace/cadizturismo/themes/default/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 139,  344 => 138,  340 => 137,  336 => 136,  323 => 126,  319 => 125,  315 => 124,  310 => 122,  300 => 115,  296 => 114,  292 => 113,  287 => 111,  277 => 104,  273 => 103,  269 => 102,  264 => 100,  254 => 93,  250 => 92,  246 => 91,  241 => 89,  224 => 79,  221 => 78,  212 => 75,  208 => 74,  204 => 73,  201 => 72,  197 => 71,  192 => 69,  188 => 68,  172 => 59,  168 => 58,  157 => 50,  150 => 46,  145 => 44,  141 => 43,  137 => 42,  133 => 41,  126 => 37,  121 => 35,  117 => 34,  113 => 33,  109 => 32,  105 => 31,  101 => 30,  97 => 29,  93 => 28,  89 => 26,  85 => 25,  81 => 24,  78 => 23,  72 => 22,  62 => 20,  52 => 18,  49 => 17,  45 => 16,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- HEADER -->
    <div class=\"header header-home\">
      <div class=\"header-container\">
        <div class=\"header-txt\">
          <h1 class=\"txt txt-home\"><span class=\"first-word\">
           {{'Playas'|_}}
            </span>{{'que te llenan de luz'|_}}</h1>
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
        <div class=\"header-comment\">
          <p class=\"comment\">{{'138km de playas, calas y ensenadas que invitan a perderse'|_}}</p>
          <a class=\"header-link\" href=\"{{lang}}/playas\">{{'Conoce nuestras playas'|_}} &nbsp;<img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/link-arrow.svg\" alt=\"\"> </a>
        </div>
      </div>
    </div>

    <!-- QUÉ SE CUECE -->
    <div class=\"whats-on\">

      <div class=\"left-txt\">
        <p class=\"title\">{{'Qué se cuece hoy en Cádiz'|_}}</p>
          <img class=\"separator\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">

          {% for iEvent in events %}
            <div class=\"event\">
              <p class=\"event-date\">{{iEvent['date_start_pretty']}}</p>
              <p class=\"event-place\">{{iEvent['place']}}</p>
              <a href=\"jornadas-micologicas.html\" class=\"event-name\">{{iEvent['title']}}</a>
            </div>
          {% endfor %}

            <a class=\"events-link\" href=\"{{lang}}/eventos\">{{'Todos los eventos'|_}}&nbsp;&nbsp;<img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg\" alt=\"\"> </a>
      </div>


      <div class=\"right-photos\">
        <!-- DIRECCIÓN 1º ARRIBA-ABAJO 2º IZQUIERDA-DERECHA -->

        <a href=\"carreras-caballos.html\">
          <div id=\"element1\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"{{eventsVip[0]['image']}}\">
            <div class=\"txt-container\">
              <p class=\"date\">{{eventsVip[0]['date_start_pretty']}}</p>
              <p class=\"name\">{{eventsVip[0]['title']}}</p>
              <img class=\"separator\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div id=\"element2\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"{{eventsVip[1]['image']}}\">
            <div class=\"txt-container\">
              <p class=\"date\">{{eventsVip[1]['date_start_pretty']}}</p>
              <p class=\"name\">{{eventsVip[1]['title']}}</p>
              <img class=\"separator\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div id=\"element3\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"{{eventsVip[2]['image']}}\">
            <div class=\"txt-container\">
              <p class=\"date\">{{eventsVip[2]['date_start_pretty']}}</p>
              <p class=\"name\">{{eventsVip[02]['title']}}</p>
              <img class=\"separator\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div id=\"element4\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"{{eventsVip[3]['image']}}\">
            <div class=\"txt-container\">
              <p class=\"date\">{{eventsVip[3]['date_start_pretty']}}</p>
              <p class=\"name\">{{eventsVip[3]['title']}}</p>
              <img class=\"separator\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
      </div>
    </div>

    <!--  RUTAS -->
    <div class=\"secret-routes\">
      <div class=\"txt-container\">
        <p class=\"title\">{{'rutas secretas'|_}}</p>
        <p class=\"desc\">{{'¿Eres de emociones fuertes? Disfruta de Cádiz como nunca antes.'|_}}</p>
        <a class=\"events-link\" href=\"{{lang}}/rutas\">{{'Selección de rutas secretas'|_}}<img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg\" alt=\"\"> </a>
        <img class=\"separator\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
      </div>
    </div>", "/Users/jekyll/workspace/cadizturismo/themes/default/pages/home.htm", "");
    }
}
