<?php

/* /Users/jekyll/Desktop/workspace/cadizturismo/themes/default/pages/home.htm */
class __TwigTemplate_a149fd00049e356d6e09ca5e80008af98fe715bc4e240279792f16618795dd5e extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationPage"] ?? null), 0, array(), "array"), "html", null, true);
        echo "
            </span>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationPage"] ?? null), 1, array(), "array"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationPage"] ?? null), 2, array(), "array"), "html", null, true);
        echo "</p>
          <a class=\"header-link\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/playas\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationPage"] ?? null), 3, array(), "array"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationPage"] ?? null), 4, array(), "array"), "html", null, true);
        echo "</p>
          <img class=\"separator\" src=\"";
        // line 28
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">

          ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["iEvent"]) {
            // line 31
            echo "            <div class=\"event\">
              <p class=\"event-date\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["iEvent"], "date_start_pretty", array(), "array"), "html", null, true);
            echo "</p>
              <p class=\"event-place\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["iEvent"], "place", array(), "array"), "html", null, true);
            echo "</p>
              <a href=\"jornadas-micologicas.html\" class=\"event-name\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["iEvent"], "title", array(), "array"), "html", null, true);
            echo "</a>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iEvent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
            <a class=\"events-link\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/eventos\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationPage"] ?? null), 5, array(), "array"), "html", null, true);
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
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 0, array(), "array"), "image", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"txt-container\">
              <p class=\"date\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 0, array(), "array"), "date_start_pretty", array(), "array"), "html", null, true);
        echo "</p>
              <p class=\"name\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 0, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</p>
              <img class=\"separator\" src=\"";
        // line 52
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div id=\"element2\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 1, array(), "array"), "image", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"txt-container\">
              <p class=\"date\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 1, array(), "array"), "date_start_pretty", array(), "array"), "html", null, true);
        echo "</p>
              <p class=\"name\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 1, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</p>
              <img class=\"separator\" src=\"";
        // line 63
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div id=\"element3\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 2, array(), "array"), "image", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"txt-container\">
              <p class=\"date\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 2, array(), "array"), "date_start_pretty", array(), "array"), "html", null, true);
        echo "</p>
              <p class=\"name\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 2, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</p>
              <img class=\"separator\" src=\"";
        // line 74
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/small-yellow-separator.svg\">
            </div>
          </div>
        </a>
        <a href=\"#\">
          <div id=\"element4\" class=\"element\">
            <div class=\"overlay-img\"></div>
            <img class=\"rec-img\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 3, array(), "array"), "image", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"txt-container\">
              <p class=\"date\">";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 3, array(), "array"), "date_start_pretty", array(), "array"), "html", null, true);
        echo "</p>
              <p class=\"name\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["eventsVip"] ?? null), 3, array(), "array"), "title", array(), "array"), "html", null, true);
        echo "</p>
              <img class=\"separator\" src=\"";
        // line 85
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
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationPage"] ?? null), 6, array(), "array"), "html", null, true);
        echo "</p>
        <p class=\"desc\">";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationPage"] ?? null), 7, array(), "array"), "html", null, true);
        echo "</p>
        <a class=\"events-link\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/rutas\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["translationPage"] ?? null), 8, array(), "array"), "html", null, true);
        echo "<img src=\"";
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg\" alt=\"\"> </a>
        <img class=\"separator\" src=\"";
        // line 98
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 98,  227 => 97,  223 => 96,  219 => 95,  206 => 85,  202 => 84,  198 => 83,  193 => 81,  183 => 74,  179 => 73,  175 => 72,  170 => 70,  160 => 63,  156 => 62,  152 => 61,  147 => 59,  137 => 52,  133 => 51,  129 => 50,  124 => 48,  107 => 38,  104 => 37,  95 => 34,  91 => 33,  87 => 32,  84 => 31,  80 => 30,  75 => 28,  71 => 27,  55 => 18,  51 => 17,  46 => 14,  42 => 13,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- HEADER -->
    <div class=\"header header-home\">
      <div class=\"header-container\">
        <div class=\"header-txt\">
          <h1 class=\"txt txt-home\"><span class=\"first-word\">
           {{ translationPage[0] }}
            </span>{{ translationPage[1] }}</h1>
          <img class=\"brush\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/brush-header.svg\" alt=\"\">
        </div>

        <!-- SEARCH -->
        <div id='prtlSearch'>
          {% partial \"site/search\" %}
        </div>
        
        <div class=\"header-comment\">
          <p class=\"comment\">{{ translationPage[2] }}</p>
          <a class=\"header-link\" href=\"{{lang}}/playas\">{{ translationPage[3] }} &nbsp;<img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/link-arrow.svg\" alt=\"\"> </a>
        </div>
      </div>
    </div>

    <!-- QUÉ SE CUECE -->
    <div class=\"whats-on\">

      <div class=\"left-txt\">
        <p class=\"title\">{{ translationPage[4] }}</p>
          <img class=\"separator\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">

          {% for iEvent in events %}
            <div class=\"event\">
              <p class=\"event-date\">{{iEvent['date_start_pretty']}}</p>
              <p class=\"event-place\">{{iEvent['place']}}</p>
              <a href=\"jornadas-micologicas.html\" class=\"event-name\">{{iEvent['title']}}</a>
            </div>
          {% endfor %}

            <a class=\"events-link\" href=\"{{lang}}/eventos\">{{ translationPage[5] }}&nbsp;&nbsp;<img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg\" alt=\"\"> </a>
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
        <p class=\"title\">{{ translationPage[6] }}</p>
        <p class=\"desc\">{{ translationPage[7] }}</p>
        <a class=\"events-link\" href=\"{{lang}}/rutas\">{{ translationPage[8] }}<img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/link-arrow-yellow.svg\" alt=\"\"> </a>
        <img class=\"separator\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
      </div>
    </div>", "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/pages/home.htm", "");
    }
}
