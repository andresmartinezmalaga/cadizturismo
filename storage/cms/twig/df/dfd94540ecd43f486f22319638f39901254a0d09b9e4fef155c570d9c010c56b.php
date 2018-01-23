<?php

/* /Users/jekyll/workspace/cadizturismo/themes/default/partials/site/header.htm */
class __TwigTemplate_c997bfc4d8a659b7a9a385cefb1e610919266a1d9603503b3bc92d8c40da58e2 extends Twig_Template
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
        echo "<!-- MENU-->
    <div class=\"slidemenu\">
      <div class=\"elements\">
        <div class=\"logo-container\">
          <a href=\"";
        // line 5
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "\"><img src=\"";
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/cadiz-menu.svg\" alt=\"\"></a>
        </div>
        <div class=\"menus\">
          <div class=\"menu-list\">
            <p class=\"menu-title\">";
        // line 9
        echo twig_escape_filter($this->env, ($context["whereToGo"] ?? null), "html", null, true);
        echo "</p>
            <img class=\"separator separator-menu\" src=\"";
        // line 10
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
            <img class=\"separator-tiny\" src=\"";
        // line 11
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
            <ul class=\"menu-ul donde-ul\">
              ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array") == "")) {
                // line 15
                echo "                ";
                $context["menulang"] = "nombrees";
                // line 16
                echo "                ";
            }
            // line 17
            echo "                <li class=\"menu-item\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array"), "html", null, true);
            echo "</a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </ul>
            <ul class=\"menu-mobile\">
              <li class=\"menu-item\"><a href=\"";
        // line 21
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/comarcas\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Comarcas"));
        echo "</a></li>
              <li class=\"menu-item\"><a href=\"";
        // line 22
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/municipios\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Municipios"));
        echo "</a></li>
            </ul>
          </div>
          <div class=\"menu-list\">
            <p class=\"menu-title\">";
        // line 26
        echo twig_escape_filter($this->env, ($context["whatToDo"] ?? null), "html", null, true);
        echo "</p>
            <img class=\"separator separator-menu\" src=\"";
        // line 27
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
            <img class=\"separator-tiny\" src=\"";
        // line 28
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
            <ul class=\"menu-ul\">
              ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu4"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array") == "")) {
                // line 32
                echo "                ";
                $context["menulang"] = "nombrees";
                // line 33
                echo "                ";
            }
            // line 34
            echo "                <li class=\"menu-item\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array"), "html", null, true);
            echo "</a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </ul>
          </div>
          <div class=\"menu-list\">
            <p class=\"menu-title\">";
        // line 39
        echo twig_escape_filter($this->env, ($context["whatToLive"] ?? null), "html", null, true);
        echo "</p>
            <img class=\"separator separator-menu\" src=\"";
        // line 40
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
            <img class=\"separator-tiny\" src=\"";
        // line 41
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
            <ul class=\"menu-ul\">
              ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu2"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array") == "")) {
                // line 45
                echo "                ";
                $context["menulang"] = "nombrees";
                // line 46
                echo "                ";
            }
            // line 47
            echo "                <li class=\"menu-item\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array"), "html", null, true);
            echo "</a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                <li class=\"menu-item\"><a href=\"/eventos\">";
        echo twig_escape_filter($this->env, ($context["allEvents"] ?? null), "html", null, true);
        echo "</a></li>
            </ul>
          </div>
          <div class=\"menu-list\">
            <p class=\"menu-title\">";
        // line 53
        echo twig_escape_filter($this->env, ($context["myStance"] ?? null), "html", null, true);
        echo "</p>
            <img class=\"separator separator-menu\" src=\"";
        // line 54
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
            <img class=\"separator-tiny\" src=\"";
        // line 55
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
            <ul class=\"menu-ul\">
              ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu3"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 58
            echo "                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array") == "")) {
                // line 59
                echo "                ";
                $context["menulang"] = "nombrees";
                // line 60
                echo "                ";
            }
            // line 61
            echo "                <li class=\"menu-item\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array"), "html", null, true);
            echo "</a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </ul>
          </div>
        </div>
      </div>
      <div class=\"border\">
        <label class=\"mobile-toggle\" for=\"nav-toggle\">
          <div class=\"top-bar\"></div>
          <div class=\"middle-bar\"></div>
          <div class=\"bottom-bar\"></div>
        </label>
        <img class=\"normal\" src=\"";
        // line 73
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/top-menu.svg\">
        <img class=\"mobile\" src=\"";
        // line 74
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/top-mobile.svg\">
      </div>
    </div>

    <div class=\"mini-logo-container\">
      <a href=\"";
        // line 79
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "\"><img src=\"";
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/mini-logo.svg\"></a>
    </div>
    <div class=\"language-container\">
      <p class=\"languages\"> <a href=\"";
        // line 82
        echo url("/");
        echo "/en";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "url", array()), "html", null, true);
        echo "\" class=\"lang\">EN</a> <a class=\"separator separator-lang\"> · </a><a href=\"";
        echo url("/");
        echo "/es";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "url", array()), "html", null, true);
        echo "\" class=\"lang-es\">ES</a> <a class=\"separator separator-lang\"> · </a> <a href=\"";
        echo url("/");
        echo "/fr";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "url", array()), "html", null, true);
        echo "\" class=\"lang\">FR</a> <a class=\"separator separator-lang\"> · </a><a href=\"";
        echo url("/");
        echo "/de";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "url", array()), "html", null, true);
        echo "\" class=\"lang\">DE</a> <a class=\"separator separator-lang\"> · </a> <a href=\"";
        echo url("/");
        echo "/ru";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "url", array()), "html", null, true);
        echo "\" class=\"lang\">RU</a></p>
    </div>

<!-- MENÚ MOBILE -->
<nav class=\"navigation\">
    <div class=\"hamburger\">
      <span class=\"bars\"></span>
    </div>
    <div class=\"menu\">
      <div class=\"logo-container\">
        <a href=\"";
        // line 92
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "\"><img src=\"";
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/cadiz-menu.svg\" alt=\"\"></a>
      </div>
      <div class=\"menus\">
        <div class=\"menu-list\">
          <p class=\"menu-title\">";
        // line 96
        echo twig_escape_filter($this->env, ($context["whereToGo"] ?? null), "html", null, true);
        echo "</p>
          <img class=\"separator separator-menu\" src=\"";
        // line 97
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"";
        // line 98
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul donde-ul where-ul\">
            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 101
            echo "              ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array") == "")) {
                // line 102
                echo "              ";
                $context["menulang"] = "nombrees";
                // line 103
                echo "              ";
            }
            // line 104
            echo "              <li class=\"menu-item\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">";
        // line 109
        echo twig_escape_filter($this->env, ($context["whatToDo"] ?? null), "html", null, true);
        echo "</p>
          <img class=\"separator separator-menu\" src=\"";
        // line 110
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"";
        // line 111
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul do-ul\">
            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu4"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 114
            echo "              ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array") == "")) {
                // line 115
                echo "              ";
                $context["menulang"] = "nombrees";
                // line 116
                echo "              ";
            }
            // line 117
            echo "              <li class=\"menu-item\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">";
        // line 122
        echo twig_escape_filter($this->env, ($context["whatToLive"] ?? null), "html", null, true);
        echo "</p>
          <img class=\"separator separator-menu\" src=\"";
        // line 123
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"";
        // line 124
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul live-ul\">
            ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu2"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 127
            echo "              ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array") == "")) {
                // line 128
                echo "              ";
                $context["menulang"] = "nombrees";
                // line 129
                echo "              ";
            }
            // line 130
            echo "              <li class=\"menu-item\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "              <li class=\"menu-item\"><a href=\"/eventos\">";
        echo twig_escape_filter($this->env, ($context["allEvents"] ?? null), "html", null, true);
        echo "</a></li>
          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">";
        // line 136
        echo twig_escape_filter($this->env, ($context["myStance"] ?? null), "html", null, true);
        echo "</p>
          <img class=\"separator separator-menu\" src=\"";
        // line 137
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"";
        // line 138
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul stance-ul\">
            ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu3"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 141
            echo "              ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array") == "")) {
                // line 142
                echo "              ";
                $context["menulang"] = "nombrees";
                // line 143
                echo "              ";
            }
            // line 144
            echo "              <li class=\"menu-item\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "          </ul>
        </div>
      </div>
    </div>
  </nav>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/workspace/cadizturismo/themes/default/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 146,  451 => 144,  448 => 143,  445 => 142,  442 => 141,  438 => 140,  433 => 138,  429 => 137,  425 => 136,  417 => 132,  406 => 130,  403 => 129,  400 => 128,  397 => 127,  393 => 126,  388 => 124,  384 => 123,  380 => 122,  375 => 119,  364 => 117,  361 => 116,  358 => 115,  355 => 114,  351 => 113,  346 => 111,  342 => 110,  338 => 109,  333 => 106,  322 => 104,  319 => 103,  316 => 102,  313 => 101,  309 => 100,  304 => 98,  300 => 97,  296 => 96,  285 => 92,  254 => 82,  244 => 79,  236 => 74,  232 => 73,  220 => 63,  209 => 61,  206 => 60,  203 => 59,  200 => 58,  196 => 57,  191 => 55,  187 => 54,  183 => 53,  175 => 49,  164 => 47,  161 => 46,  158 => 45,  155 => 44,  151 => 43,  146 => 41,  142 => 40,  138 => 39,  133 => 36,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  109 => 30,  104 => 28,  100 => 27,  96 => 26,  85 => 22,  77 => 21,  73 => 19,  62 => 17,  59 => 16,  56 => 15,  53 => 14,  49 => 13,  44 => 11,  40 => 10,  36 => 9,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- MENU-->
    <div class=\"slidemenu\">
      <div class=\"elements\">
        <div class=\"logo-container\">
          <a href=\"{{url('/')}}/{{lang}}\"><img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/cadiz-menu.svg\" alt=\"\"></a>
        </div>
        <div class=\"menus\">
          <div class=\"menu-list\">
            <p class=\"menu-title\">{{ whereToGo }}</p>
            <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
            <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
            <ul class=\"menu-ul donde-ul\">
              {% for item in staticMenu.menuItems %}
                {% if item.viewBag[menulang] == '' %}
                {% set menulang = 'nombrees' %}
                {% endif %}
                <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.viewBag[menulang] }}</a></li>
              {% endfor %}
            </ul>
            <ul class=\"menu-mobile\">
              <li class=\"menu-item\"><a href=\"{{url('/')}}/{{lang}}/comarcas\">{{'Comarcas'|_}}</a></li>
              <li class=\"menu-item\"><a href=\"{{url('/')}}/{{lang}}/municipios\">{{'Municipios'|_}}</a></li>
            </ul>
          </div>
          <div class=\"menu-list\">
            <p class=\"menu-title\">{{ whatToDo }}</p>
            <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
            <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
            <ul class=\"menu-ul\">
              {% for item in staticMenu4.menuItems %}
                {% if item.viewBag[menulang] == '' %}
                {% set menulang = 'nombrees' %}
                {% endif %}
                <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.viewBag[menulang] }}</a></li>
              {% endfor %}
            </ul>
          </div>
          <div class=\"menu-list\">
            <p class=\"menu-title\">{{ whatToLive }}</p>
            <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
            <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
            <ul class=\"menu-ul\">
              {% for item in staticMenu2.menuItems %}
                {% if item.viewBag[menulang] == '' %}
                {% set menulang = 'nombrees' %}
                {% endif %}
                <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.viewBag[menulang] }}</a></li>
              {% endfor %}
                <li class=\"menu-item\"><a href=\"/eventos\">{{ allEvents }}</a></li>
            </ul>
          </div>
          <div class=\"menu-list\">
            <p class=\"menu-title\">{{ myStance }}</p>
            <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
            <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
            <ul class=\"menu-ul\">
              {% for item in staticMenu3.menuItems %}
                {% if item.viewBag[menulang] == '' %}
                {% set menulang = 'nombrees' %}
                {% endif %}
                <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.viewBag[menulang] }}</a></li>
              {% endfor %}
            </ul>
          </div>
        </div>
      </div>
      <div class=\"border\">
        <label class=\"mobile-toggle\" for=\"nav-toggle\">
          <div class=\"top-bar\"></div>
          <div class=\"middle-bar\"></div>
          <div class=\"bottom-bar\"></div>
        </label>
        <img class=\"normal\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/top-menu.svg\">
        <img class=\"mobile\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/top-mobile.svg\">
      </div>
    </div>

    <div class=\"mini-logo-container\">
      <a href=\"{{url('/')}}/{{lang}}\"><img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/mini-logo.svg\"></a>
    </div>
    <div class=\"language-container\">
      <p class=\"languages\"> <a href=\"{{url('/')}}/en{{this.page.url}}\" class=\"lang\">EN</a> <a class=\"separator separator-lang\"> · </a><a href=\"{{url('/')}}/es{{this.page.url}}\" class=\"lang-es\">ES</a> <a class=\"separator separator-lang\"> · </a> <a href=\"{{url('/')}}/fr{{this.page.url}}\" class=\"lang\">FR</a> <a class=\"separator separator-lang\"> · </a><a href=\"{{url('/')}}/de{{this.page.url}}\" class=\"lang\">DE</a> <a class=\"separator separator-lang\"> · </a> <a href=\"{{url('/')}}/ru{{this.page.url}}\" class=\"lang\">RU</a></p>
    </div>

<!-- MENÚ MOBILE -->
<nav class=\"navigation\">
    <div class=\"hamburger\">
      <span class=\"bars\"></span>
    </div>
    <div class=\"menu\">
      <div class=\"logo-container\">
        <a href=\"{{url('/')}}/{{lang}}\"><img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/cadiz-menu.svg\" alt=\"\"></a>
      </div>
      <div class=\"menus\">
        <div class=\"menu-list\">
          <p class=\"menu-title\">{{ whereToGo }}</p>
          <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul donde-ul where-ul\">
            {% for item in staticMenu.menuItems %}
              {% if item.viewBag[menulang] == '' %}
              {% set menulang = 'nombrees' %}
              {% endif %}
              <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.viewBag[menulang] }}</a></li>
            {% endfor %}
          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">{{ whatToDo }}</p>
          <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul do-ul\">
            {% for item in staticMenu4.menuItems %}
              {% if item.viewBag[menulang] == '' %}
              {% set menulang = 'nombrees' %}
              {% endif %}
              <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.viewBag[menulang] }}</a></li>
            {% endfor %}
          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">{{ whatToLive }}</p>
          <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul live-ul\">
            {% for item in staticMenu2.menuItems %}
              {% if item.viewBag[menulang] == '' %}
              {% set menulang = 'nombrees' %}
              {% endif %}
              <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.viewBag[menulang] }}</a></li>
            {% endfor %}
              <li class=\"menu-item\"><a href=\"/eventos\">{{ allEvents }}</a></li>
          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">{{ myStance }}</p>
          <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul stance-ul\">
            {% for item in staticMenu3.menuItems %}
              {% if item.viewBag[menulang] == '' %}
              {% set menulang = 'nombrees' %}
              {% endif %}
              <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.viewBag[menulang] }}</a></li>
            {% endfor %}
          </ul>
        </div>
      </div>
    </div>
  </nav>", "/Users/jekyll/workspace/cadizturismo/themes/default/partials/site/header.htm", "");
    }
}
