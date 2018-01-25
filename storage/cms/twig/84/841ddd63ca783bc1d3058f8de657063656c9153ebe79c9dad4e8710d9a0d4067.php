<?php

/* /Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/menu.htm */
class __TwigTemplate_b8ae5cec640fa54ac46df2d0bc8281884b28e03321611cca237847f62bb987c4 extends Twig_Template
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
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Dónde ir"));
        echo "</p>
        <img class=\"separator separator-menu\" src=\"";
        // line 11
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
        <img class=\"separator-tiny\" src=\"";
        // line 12
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
        <ul class=\"menu-ul donde-ul\">
          ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "            ";
            $context["tt"] = ("." . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()));
            echo " 
            <li class=\"menu-item\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(($context["tt"] ?? null)));
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </ul>
        <ul class=\"menu-mobile\">
          <li class=\"menu-item\"><a href=\"";
        // line 20
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/comarcas\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Comarcas"));
        echo "</a></li>
          <li class=\"menu-item\"><a href=\"";
        // line 21
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/municipios\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Munucipios"));
        echo "</a></li>
        </ul>
      </div>
      
      <div class=\"menu-list\">
        <p class=\"menu-title\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Qué Hacer"));
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
            echo "            ";
            $context["tt"] = ("." . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()));
            echo "         
            <li class=\"menu-item\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(($context["tt"] ?? null)));
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </ul>
      </div>
      
      <div class=\"menu-list\">
        <p class=\"menu-title\">";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Qué Vivir"));
        echo "</p>
        <img class=\"separator separator-menu\" src=\"";
        // line 39
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
        <img class=\"separator-tiny\" src=\"";
        // line 40
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
        <ul class=\"menu-ul\">
          ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu2"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "            ";
            $context["tt"] = ("." . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()));
            echo "             
            <li class=\"menu-item\"><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(($context["tt"] ?? null)));
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo " 
            <li class=\"menu-item\"><a href=\"todos-los-eventos\">";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Todos los eventos"));
        echo "</a></li>              
        </ul>
      </div>
     
      <div class=\"menu-list\">
        <p class=\"menu-title\">";
        // line 51
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Mi estancia"));
        echo "</p>
        <img class=\"separator separator-menu\" src=\"";
        // line 52
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
        <img class=\"separator-tiny\" src=\"";
        // line 53
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
        <ul class=\"menu-ul\">
          ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu3"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            echo "            ";
            $context["tt"] = ("." . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()));
            echo "              
            <li class=\"menu-item\"><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(($context["tt"] ?? null)));
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </ul>
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
        // line 69
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/top-menu.svg\">
    <img class=\"mobile\" src=\"";
        // line 70
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/top-mobile.svg\">
  </div>
</div>

<div class=\"mini-logo-container\">
  <a href=\"";
        // line 75
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "\"><img src=\"";
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/mini-logo.svg\"></a>
</div>
<div class=\"language-container\">
  <!-- Añadir la clase 'active-lang' al enlace cuando esté activo el idioma correspondiente - de ejemplo está puesto en ESPAÑOL -->
  <p class=\"languages\">
    <a href=\"";
        // line 80
        echo url("/");
        echo "/en";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "url", array()), "html", null, true);
        echo "\" class=\"lang ";
        echo (((($context["lang"] ?? null) == "en")) ? ("active-lang") : (""));
        echo "\">EN</a>
    <a class=\"separator separator-lang\"> · </a>
    <a href=\"";
        // line 82
        echo url("/");
        echo "/es";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "url", array()), "html", null, true);
        echo "\" class=\"lang-es ";
        echo (((($context["lang"] ?? null) == "es")) ? ("active-lang") : (""));
        echo "\">ES</a>
    <a class=\"separator separator-lang\"> · </a> <a href=\"";
        // line 83
        echo url("/");
        echo "/fr";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "url", array()), "html", null, true);
        echo "\" class=\"lang ";
        echo (((($context["lang"] ?? null) == "fr")) ? ("active-lang") : (""));
        echo "\">FR</a>
    <a class=\"separator separator-lang\"> · </a><a href=\"";
        // line 84
        echo url("/");
        echo "/de";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "url", array()), "html", null, true);
        echo "\" class=\"lang ";
        echo (((($context["lang"] ?? null) == "de")) ? ("active-lang") : (""));
        echo "\">DE</a>
    <a class=\"separator separator-lang\"> · </a> <a href=\"";
        // line 85
        echo url("/");
        echo "/ru";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "url", array()), "html", null, true);
        echo "\" class=\"lang ";
        echo (((($context["lang"] ?? null) == "ru")) ? ("active-lang") : (""));
        echo "\">RU</a></p>
</div>

<!-- MENÚ MOBILE -->
<nav class=\"navigation\">
    <div class=\"hamburger\">
      <span class=\"bars\"></span>
    </div>
    <div class=\"menu\">
      <div class=\"logo-container\">
        <a href=\"";
        // line 95
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
        // line 99
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Dónde ir"));
        echo "</p>
          <img class=\"separator separator-menu\" src=\"";
        // line 100
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"";
        // line 101
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul donde-ul where-ul\">
            ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "   
              ";
            // line 104
            $context["tt"] = ("." . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()));
            echo "           
              <li class=\"menu-item\"><a href=\"";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(($context["tt"] ?? null)));
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">";
        // line 110
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Qué Hacer"));
        echo "</p>
          <img class=\"separator separator-menu\" src=\"";
        // line 111
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"";
        // line 112
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul do-ul\">
            ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu4"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 115
            echo "              ";
            $context["tt"] = ("." . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()));
            echo "              
              <li class=\"menu-item\"><a href=\"";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(($context["tt"] ?? null)));
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">";
        // line 121
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Qué Vivir"));
        echo "</p>
          <img class=\"separator separator-menu\" src=\"";
        // line 122
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"";
        // line 123
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul live-ul\">
            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu2"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 126
            echo "              ";
            $context["tt"] = ("." . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()));
            echo " 
              <li class=\"menu-item\"><a href=\"";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(($context["tt"] ?? null)));
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "              <li class=\"menu-item\"><a href=\"todos-los-eventos\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Todos los eventos"));
        echo "</a></li>
          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">";
        // line 133
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Mi estancia"));
        echo "</p>
          <img class=\"separator separator-menu\" src=\"";
        // line 134
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"";
        // line 135
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul stance-ul\">
            ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu3"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 138
            echo "              ";
            $context["tt"] = ("." . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()));
            echo " 
              <li class=\"menu-item\"><a href=\"";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(($context["tt"] ?? null)));
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "          </ul>
        </div>
      </div>
    </div>
  </nav>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 141,  440 => 139,  435 => 138,  431 => 137,  426 => 135,  422 => 134,  418 => 133,  410 => 129,  400 => 127,  395 => 126,  391 => 125,  386 => 123,  382 => 122,  378 => 121,  373 => 118,  363 => 116,  358 => 115,  354 => 114,  349 => 112,  345 => 111,  341 => 110,  336 => 107,  326 => 105,  322 => 104,  316 => 103,  311 => 101,  307 => 100,  303 => 99,  292 => 95,  275 => 85,  267 => 84,  259 => 83,  251 => 82,  242 => 80,  230 => 75,  222 => 70,  218 => 69,  206 => 59,  196 => 57,  191 => 56,  187 => 55,  182 => 53,  178 => 52,  174 => 51,  166 => 46,  163 => 45,  153 => 44,  148 => 43,  144 => 42,  139 => 40,  135 => 39,  131 => 38,  125 => 34,  115 => 32,  110 => 31,  106 => 30,  101 => 28,  97 => 27,  93 => 26,  81 => 21,  73 => 20,  69 => 18,  59 => 16,  54 => 15,  50 => 14,  45 => 12,  41 => 11,  37 => 10,  25 => 5,  19 => 1,);
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
        <p class=\"menu-title\">{{ 'Dónde ir'|_ }}</p>
        <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
        <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
        <ul class=\"menu-ul donde-ul\">
          {% for item in staticMenu.menuItems %}
            {% set tt = '.'~item.title %} 
            <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ tt|_ }}</a></li>
          {% endfor %}
        </ul>
        <ul class=\"menu-mobile\">
          <li class=\"menu-item\"><a href=\"{{url('/')}}/{{lang}}/comarcas\">{{ 'Comarcas'|_ }}</a></li>
          <li class=\"menu-item\"><a href=\"{{url('/')}}/{{lang}}/municipios\">{{ 'Munucipios'|_ }}</a></li>
        </ul>
      </div>
      
      <div class=\"menu-list\">
        <p class=\"menu-title\">{{ 'Qué Hacer'|_ }}</p>
        <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
        <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
        <ul class=\"menu-ul\">
          {% for item in staticMenu4.menuItems %}
            {% set tt = '.'~item.title %}         
            <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ tt|_ }}</a></li>
          {% endfor %}
        </ul>
      </div>
      
      <div class=\"menu-list\">
        <p class=\"menu-title\">{{ 'Qué Vivir'|_ }}</p>
        <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
        <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
        <ul class=\"menu-ul\">
          {% for item in staticMenu2.menuItems %}
            {% set tt = '.'~item.title %}             
            <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ tt|_ }}</a></li>
          {% endfor %} 
            <li class=\"menu-item\"><a href=\"todos-los-eventos\">{{ 'Todos los eventos'|_ }}</a></li>              
        </ul>
      </div>
     
      <div class=\"menu-list\">
        <p class=\"menu-title\">{{ 'Mi estancia'|_ }}</p>
        <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
        <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
        <ul class=\"menu-ul\">
          {% for item in staticMenu3.menuItems %}
            {% set tt = '.'~item.title %}              
            <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ tt|_ }}</a></li>
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
  <!-- Añadir la clase 'active-lang' al enlace cuando esté activo el idioma correspondiente - de ejemplo está puesto en ESPAÑOL -->
  <p class=\"languages\">
    <a href=\"{{url('/')}}/en{{this.page.url}}\" class=\"lang {{(lang=='en')?'active-lang':''}}\">EN</a>
    <a class=\"separator separator-lang\"> · </a>
    <a href=\"{{url('/')}}/es{{this.page.url}}\" class=\"lang-es {{(lang=='es')?'active-lang':''}}\">ES</a>
    <a class=\"separator separator-lang\"> · </a> <a href=\"{{url('/')}}/fr{{this.page.url}}\" class=\"lang {{(lang=='fr')?'active-lang':''}}\">FR</a>
    <a class=\"separator separator-lang\"> · </a><a href=\"{{url('/')}}/de{{this.page.url}}\" class=\"lang {{(lang=='de')?'active-lang':''}}\">DE</a>
    <a class=\"separator separator-lang\"> · </a> <a href=\"{{url('/')}}/ru{{this.page.url}}\" class=\"lang {{(lang=='ru')?'active-lang':''}}\">RU</a></p>
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
          <p class=\"menu-title\">{{ 'Dónde ir'|_ }}</p>
          <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul donde-ul where-ul\">
            {% for item in staticMenu.menuItems %}   
              {% set tt = '.'~item.title %}           
              <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ tt|_ }}</a></li>
            {% endfor %}
          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">{{ 'Qué Hacer'|_  }}</p>
          <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul do-ul\">
            {% for item in staticMenu4.menuItems %}
              {% set tt = '.'~item.title %}              
              <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ tt|_ }}</a></li>
            {% endfor %}
          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">{{ 'Qué Vivir'|_ }}</p>
          <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul live-ul\">
            {% for item in staticMenu2.menuItems %}
              {% set tt = '.'~item.title %} 
              <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{tt|_}}</a></li>
            {% endfor %}
              <li class=\"menu-item\"><a href=\"todos-los-eventos\">{{ 'Todos los eventos'|_ }}</a></li>
          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">{{ 'Mi estancia'|_ }}</p>
          <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul stance-ul\">
            {% for item in staticMenu3.menuItems %}
              {% set tt = '.'~item.title %} 
              <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ tt|_ }}</a></li>
            {% endfor %}
          </ul>
        </div>
      </div>
    </div>
  </nav>", "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/menu.htm", "");
    }
}
