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

        <!-- SEARCH -->
        <div id='prtlSearch'>
          ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/search"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "        </div>

        <div class=\"header-comment\">
          <p class=\"comment\">";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("138km de playas, calas y ensenadas que invitan a perderse"));
        echo "</p>
          <a class=\"header-link\" href=\"";
        // line 18
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
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("QUÉ SE CUECE HOY EN CÁDIZ"));
        echo "</p>
          <img class=\"separator\" src=\"";
        // line 28
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">

          ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events3"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["iEvent"]) {
            // line 31
            echo "
            <div class=\"event\">
              <p class=\"event-date\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["iEvent"], "date_start_pretty", array(), "array"), "html", null, true);
            echo "</p>
              <p class=\"event-place\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["iEvent"], "place", array(), "array"), "html", null, true);
            echo "</p>
              <a href=\"jornadas-micologicas.html\" class=\"event-name\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["iEvent"], "title", array(), "array"), "html", null, true);
            echo "</a>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iEvent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
            <a class=\"events-link\" href=\"";
        // line 39
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
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 0, array(), "array"), "image", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"txt-container\">
              <p class=\"date\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 0, array(), "array"), "date_start_pretty", array(), "array"), "html", null, true);
        echo "</p>
              <p class=\"name\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 0, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</p>
              <img class=\"separator\" src=\"";
        // line 53
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div id=\"element2\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 1, array(), "array"), "image", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"txt-container\">
              <p class=\"date\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 1, array(), "array"), "date_start_pretty", array(), "array"), "html", null, true);
        echo "</p>
              <p class=\"name\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 1, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</p>
              <img class=\"separator\" src=\"";
        // line 64
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div id=\"element3\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 2, array(), "array"), "image", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"txt-container\">
              <p class=\"date\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 2, array(), "array"), "date_start_pretty", array(), "array"), "html", null, true);
        echo "</p>
              <p class=\"name\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 2, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</p>
              <img class=\"separator\" src=\"";
        // line 75
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div id=\"element4\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 3, array(), "array"), "image", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"txt-container\">
              <p class=\"date\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 3, array(), "array"), "date_start_pretty", array(), "array"), "html", null, true);
        echo "</p>
              <p class=\"name\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 3, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</p>
              <img class=\"separator\" src=\"";
        // line 86
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
        // line 96
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("RUTAS SECRETAS"));
        echo "</p>
        <p class=\"desc\">";
        // line 97
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("¿Eres de emociones fuertes? Disfruta de Cádiz como nunca antes."));
        echo "</p>
        <a class=\"events-link\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/rutas\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Selección de rutas secretas"));
        echo "<img src=\"";
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg\" alt=\"\"> </a>
        <img class=\"separator\" src=\"";
        // line 99
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
        return array (  236 => 99,  228 => 98,  224 => 97,  220 => 96,  207 => 86,  203 => 85,  199 => 84,  194 => 82,  184 => 75,  180 => 74,  176 => 73,  171 => 71,  161 => 64,  157 => 63,  153 => 62,  148 => 60,  138 => 53,  134 => 52,  130 => 51,  125 => 49,  108 => 39,  105 => 38,  96 => 35,  92 => 34,  88 => 33,  84 => 31,  80 => 30,  75 => 28,  71 => 27,  55 => 18,  51 => 17,  46 => 14,  42 => 13,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- HEADER -->
    <div class=\"header header-home\">
      <div class=\"header-container\">
        <div class=\"header-txt\">
          <h1 class=\"txt txt-home\"><span class=\"first-word\">
           {{ 'Playas'|_ }}
            </span>{{ 'que te llenan de luz'|_ }}</h1>
          <img class=\"brush\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/brush-header.svg\" alt=\"\">
        </div>

        <!-- SEARCH -->
        <div id='prtlSearch'>
          {% partial \"site/search\" %}
        </div>

        <div class=\"header-comment\">
          <p class=\"comment\">{{ '138km de playas, calas y ensenadas que invitan a perderse'|_ }}</p>
          <a class=\"header-link\" href=\"{{lang}}/playas\">{{ 'Conoce nuestras playas'|_ }} &nbsp;<img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/link-arrow.svg\" alt=\"\"> </a>
        </div>
      </div>
    </div>

    <!-- QUÉ SE CUECE -->
    <div class=\"whats-on\">

      <div class=\"left-txt\">
        <p class=\"title\">{{ 'QUÉ SE CUECE HOY EN CÁDIZ'|_ }}</p>
          <img class=\"separator\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">

          {% for iEvent in events3 %}

            <div class=\"event\">
              <p class=\"event-date\">{{iEvent['date_start_pretty']}}</p>
              <p class=\"event-place\">{{iEvent['place']}}</p>
              <a href=\"jornadas-micologicas.html\" class=\"event-name\">{{iEvent['title']}}</a>
            </div>
          {% endfor %}

            <a class=\"events-link\" href=\"{{lang}}/eventos\">{{ 'Todos los eventos'|_ }}&nbsp;&nbsp;<img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg\" alt=\"\"> </a>
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
        <p class=\"title\">{{ 'RUTAS SECRETAS'|_ }}</p>
        <p class=\"desc\">{{ '¿Eres de emociones fuertes? Disfruta de Cádiz como nunca antes.'|_ }}</p>
        <a class=\"events-link\" href=\"{{lang}}/rutas\">{{ 'Selección de rutas secretas'|_ }}<img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg\" alt=\"\"> </a>
        <img class=\"separator\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
      </div>
    </div>", "/Users/jekyll/workspace/cadizturismo/themes/default/pages/home.htm", "");
    }
}
