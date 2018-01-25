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
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.menuheader.whereToGo"));
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
            echo "               
            <li class=\"menu-item\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array"), "html", null, true);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </ul>
        <ul class=\"menu-mobile\">
          <li class=\"menu-item\"><a href=\"";
        // line 19
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/comarcas\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.menuheader.comarcas"));
        echo "</a></li>
          <li class=\"menu-item\"><a href=\"";
        // line 20
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/municipios\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.menuheader.municipios"));
        echo "</a></li>
        </ul>
      </div>
      
      <div class=\"menu-list\">
        <p class=\"menu-title\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.menuheader.whatToDo"));
        echo "</p>
        <img class=\"separator separator-menu\" src=\"";
        // line 26
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
        <img class=\"separator-tiny\" src=\"";
        // line 27
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
        <ul class=\"menu-ul\">
          ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu4"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "                
            <li class=\"menu-item\"><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array"), "html", null, true);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </ul>
      </div>
      
      <div class=\"menu-list\">
        <p class=\"menu-title\">";
        // line 36
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.menuheader.whatToLive"));
        echo "</p>
        <img class=\"separator separator-menu\" src=\"";
        // line 37
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
        <img class=\"separator-tiny\" src=\"";
        // line 38
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
        <ul class=\"menu-ul\">
          ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu2"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "              
            <li class=\"menu-item\"><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array"), "html", null, true);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo " 
            <li class=\"menu-item\"><a href=\"todos-los-eventos\">";
        // line 43
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.menuheader.allEvents"));
        echo "</a></li>              
        </ul>
      </div>
     
      <div class=\"menu-list\">
        <p class=\"menu-title\">";
        // line 48
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.menuheader.myStance"));
        echo "</p>
        <img class=\"separator separator-menu\" src=\"";
        // line 49
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
        <img class=\"separator-tiny\" src=\"";
        // line 50
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
        <ul class=\"menu-ul\">
          ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu3"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "              
            <li class=\"menu-item\"><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array"), "html", null, true);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
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
        // line 65
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/top-menu.svg\">
    <img class=\"mobile\" src=\"";
        // line 66
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/top-mobile.svg\">
  </div>
</div>

<div class=\"mini-logo-container\">
  <a href=\"";
        // line 71
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
        // line 76
        echo url("/");
        echo "/en";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "url", array()), "html", null, true);
        echo "\" class=\"lang ";
        echo (((($context["lang"] ?? null) == "en")) ? ("active-lang") : (""));
        echo "\">EN</a>
    <a class=\"separator separator-lang\"> · </a>
    <a href=\"";
        // line 78
        echo url("/");
        echo "/es";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "url", array()), "html", null, true);
        echo "\" class=\"lang-es ";
        echo (((($context["lang"] ?? null) == "es")) ? ("active-lang") : (""));
        echo "\">ES</a>
    <a class=\"separator separator-lang\"> · </a> <a href=\"";
        // line 79
        echo url("/");
        echo "/fr";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "url", array()), "html", null, true);
        echo "\" class=\"lang ";
        echo (((($context["lang"] ?? null) == "fr")) ? ("active-lang") : (""));
        echo "\">FR</a>
    <a class=\"separator separator-lang\"> · </a><a href=\"";
        // line 80
        echo url("/");
        echo "/de";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "url", array()), "html", null, true);
        echo "\" class=\"lang ";
        echo (((($context["lang"] ?? null) == "de")) ? ("active-lang") : (""));
        echo "\">DE</a>
    <a class=\"separator separator-lang\"> · </a> <a href=\"";
        // line 81
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
        // line 91
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
        // line 95
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.menuheader.whereToGo"));
        echo "</p>
          <img class=\"separator separator-menu\" src=\"";
        // line 96
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"";
        // line 97
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul donde-ul where-ul\">
            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "             
              <li class=\"menu-item\"><a href=\"";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">";
        // line 105
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.menuheader.whatToDo"));
        echo "</p>
          <img class=\"separator separator-menu\" src=\"";
        // line 106
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"";
        // line 107
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul do-ul\">
            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu4"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "             
              <li class=\"menu-item\"><a href=\"";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "viewBag", array()), ($context["menulang"] ?? null), array(), "array"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">";
        // line 115
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.menuheader.whatToLive"));
        echo "</p>
          <img class=\"separator separator-menu\" src=\"";
        // line 116
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"";
        // line 117
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul live-ul\">
            ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu2"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 120
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
        // line 122
        echo "              <li class=\"menu-item\"><a href=\"todos-los-eventos\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.menuheader.allEvents"));
        echo "</a></li>
          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">";
        // line 126
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), array("backend::lang.menuheader.myStance"));
        echo "</p>
          <img class=\"separator separator-menu\" src=\"";
        // line 127
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"";
        // line 128
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul stance-ul\">
            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu3"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 131
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
        // line 133
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
        return array (  423 => 133,  412 => 131,  408 => 130,  403 => 128,  399 => 127,  395 => 126,  387 => 122,  376 => 120,  372 => 119,  367 => 117,  363 => 116,  359 => 115,  354 => 112,  344 => 110,  338 => 109,  333 => 107,  329 => 106,  325 => 105,  320 => 102,  310 => 100,  304 => 99,  299 => 97,  295 => 96,  291 => 95,  280 => 91,  263 => 81,  255 => 80,  247 => 79,  239 => 78,  230 => 76,  218 => 71,  210 => 66,  206 => 65,  194 => 55,  184 => 53,  178 => 52,  173 => 50,  169 => 49,  165 => 48,  157 => 43,  154 => 42,  144 => 41,  138 => 40,  133 => 38,  129 => 37,  125 => 36,  119 => 32,  109 => 30,  103 => 29,  98 => 27,  94 => 26,  90 => 25,  78 => 20,  70 => 19,  66 => 17,  56 => 15,  50 => 14,  45 => 12,  41 => 11,  37 => 10,  25 => 5,  19 => 1,);
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
        <p class=\"menu-title\">{{ \"backend::lang.menuheader.whereToGo\"|trans }}</p>
        <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
        <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
        <ul class=\"menu-ul donde-ul\">
          {% for item in staticMenu.menuItems %}               
            <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.viewBag[menulang] }}</a></li>
          {% endfor %}
        </ul>
        <ul class=\"menu-mobile\">
          <li class=\"menu-item\"><a href=\"{{url('/')}}/{{lang}}/comarcas\">{{ \"backend::lang.menuheader.comarcas\"|trans }}</a></li>
          <li class=\"menu-item\"><a href=\"{{url('/')}}/{{lang}}/municipios\">{{ \"backend::lang.menuheader.municipios\"|trans }}</a></li>
        </ul>
      </div>
      
      <div class=\"menu-list\">
        <p class=\"menu-title\">{{ \"backend::lang.menuheader.whatToDo\"|trans }}</p>
        <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
        <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
        <ul class=\"menu-ul\">
          {% for item in staticMenu4.menuItems %}                
            <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.viewBag[menulang] }}</a></li>
          {% endfor %}
        </ul>
      </div>
      
      <div class=\"menu-list\">
        <p class=\"menu-title\">{{ \"backend::lang.menuheader.whatToLive\"|trans }}</p>
        <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
        <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
        <ul class=\"menu-ul\">
          {% for item in staticMenu2.menuItems %}              
            <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.viewBag[menulang] }}</a></li>
          {% endfor %} 
            <li class=\"menu-item\"><a href=\"todos-los-eventos\">{{ \"backend::lang.menuheader.allEvents\"|trans }}</a></li>              
        </ul>
      </div>
     
      <div class=\"menu-list\">
        <p class=\"menu-title\">{{ \"backend::lang.menuheader.myStance\"|trans }}</p>
        <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
        <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
        <ul class=\"menu-ul\">
          {% for item in staticMenu3.menuItems %}              
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
          <p class=\"menu-title\">{{ \"backend::lang.menuheader.whereToGo\"|trans }}</p>
          <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul donde-ul where-ul\">
            {% for item in staticMenu.menuItems %}             
              <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.viewBag[menulang] }}</a></li>
            {% endfor %}
          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">{{ \"backend::lang.menuheader.whatToDo\"|trans }}</p>
          <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul do-ul\">
            {% for item in staticMenu4.menuItems %}             
              <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.viewBag[menulang] }}</a></li>
            {% endfor %}
          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">{{ \"backend::lang.menuheader.whatToLive\"|trans }}</p>
          <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul live-ul\">
            {% for item in staticMenu2.menuItems %}
              <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.viewBag[menulang] }}</a></li>
            {% endfor %}
              <li class=\"menu-item\"><a href=\"todos-los-eventos\">{{ \"backend::lang.menuheader.allEvents\"|trans }}</a></li>
          </ul>
        </div>
        <div class=\"menu-list\">
          <p class=\"menu-title\">{{ \"backend::lang.menuheader.myStance\"|trans }}</p>
          <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
          <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
          <ul class=\"menu-ul stance-ul\">
            {% for item in staticMenu3.menuItems %}
              <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.viewBag[menulang] }}</a></li>
            {% endfor %}
          </ul>
        </div>
      </div>
    </div>
  </nav>", "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/menu.htm", "");
    }
}
