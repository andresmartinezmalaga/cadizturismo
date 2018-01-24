<?php

/* /Users/jekyll/Workspace/cadizTurismo/themes/default/pages/home.htm */
class __TwigTemplate_a9131fa9ebd40a029f37d570770d3aedd80f26edf0dee8e3984882655fe5cdf8 extends Twig_Template
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
              ";
            // line 32
            $context["i"] = ("backend::lang.eventos.category." . twig_get_attribute($this->env, $this->getSourceContext(), $context["iEvent"], "category", array(), "array"));
            // line 33
            echo "              ";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array(($context["i"] ?? null)));
            echo "


            <div class=\"event\">
              <p class=\"event-date\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["iEvent"], "date_start_pretty", array(), "array"), "html", null, true);
            echo "</p>
              <p class=\"event-place\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["iEvent"], "place", array(), "array"), "html", null, true);
            echo "</p>
              <a href=\"jornadas-micologicas.html\" class=\"event-name\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["iEvent"], "title", array(), "array"), "html", null, true);
            echo "</a> 
              
              
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iEvent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
            <a class=\"events-link\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/eventos\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.home.page.all_events"));
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
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 0, array(), "array"), "image", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"txt-container\">
              <p class=\"date\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 0, array(), "array"), "date_start_pretty", array(), "array"), "html", null, true);
        echo "</p>
              <p class=\"name\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 0, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</p>
              <img class=\"separator\" src=\"";
        // line 59
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div id=\"element2\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 1, array(), "array"), "image", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"txt-container\">
              <p class=\"date\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 1, array(), "array"), "date_start_pretty", array(), "array"), "html", null, true);
        echo "</p>
              <p class=\"name\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 1, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</p>
              <img class=\"separator\" src=\"";
        // line 70
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div id=\"element3\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 2, array(), "array"), "image", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"txt-container\">
              <p class=\"date\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 2, array(), "array"), "date_start_pretty", array(), "array"), "html", null, true);
        echo "</p>
              <p class=\"name\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 2, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</p>
              <img class=\"separator\" src=\"";
        // line 81
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div id=\"element4\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 3, array(), "array"), "image", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"txt-container\">
              <p class=\"date\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 3, array(), "array"), "date_start_pretty", array(), "array"), "html", null, true);
        echo "</p>
              <p class=\"name\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 3, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</p>
              <img class=\"separator\" src=\"";
        // line 92
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
        // line 102
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.home.page.routes_title"));
        echo "</p>
        <p class=\"desc\">";
        // line 103
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.home.page.routes_comment"));
        echo "</p>
        <a class=\"events-link\" href=\"";
        // line 104
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/rutas\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.home.page.routes_link"));
        echo "<img src=\"";
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg\" alt=\"\"> </a>
        <img class=\"separator\" src=\"";
        // line 105
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/Workspace/cadizTurismo/themes/default/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 105,  239 => 104,  235 => 103,  231 => 102,  218 => 92,  214 => 91,  210 => 90,  205 => 88,  195 => 81,  191 => 80,  187 => 79,  182 => 77,  172 => 70,  168 => 69,  164 => 68,  159 => 66,  149 => 59,  145 => 58,  141 => 57,  136 => 55,  119 => 45,  116 => 44,  105 => 39,  101 => 38,  97 => 37,  89 => 33,  87 => 32,  84 => 31,  80 => 30,  75 => 28,  71 => 27,  55 => 18,  51 => 17,  46 => 14,  42 => 13,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
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
            
              {% set i = \"backend::lang.eventos.category.\"~iEvent['category'] %}
              {{ i|trans }}


            <div class=\"event\">
              <p class=\"event-date\">{{iEvent['date_start_pretty']}}</p>
              <p class=\"event-place\">{{iEvent['place']}}</p>
              <a href=\"jornadas-micologicas.html\" class=\"event-name\">{{iEvent['title']}}</a> 
              
              
            </div>
          {% endfor %}

            <a class=\"events-link\" href=\"{{lang}}/eventos\">{{ \"backend::lang.home.page.all_events\"|trans }}&nbsp;&nbsp;<img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg\" alt=\"\"> </a>
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
        <p class=\"title\">{{ \"backend::lang.home.page.routes_title\"|trans }}</p>
        <p class=\"desc\">{{ \"backend::lang.home.page.routes_comment\"|trans }}</p>
        <a class=\"events-link\" href=\"{{lang}}/rutas\">{{ \"backend::lang.home.page.routes_link\"|trans }}<img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg\" alt=\"\"> </a>
        <img class=\"separator\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
      </div>
    </div>", "/Users/jekyll/Workspace/cadizTurismo/themes/default/pages/home.htm", "");
    }
}
