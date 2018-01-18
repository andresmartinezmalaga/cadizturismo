<?php

/* /Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/headerexp.htm */
class __TwigTemplate_ba27f9b7c10e74864291b8ffaa4b189d06f2aa35c8ccbb6b522e1787fcf986fa extends Twig_Template
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Dónde ir"));
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
        // line 16
        echo "            </ul>
            <ul class=\"menu-mobile\">
              <li class=\"menu-item\"><a href=\"";
        // line 18
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/comarcas\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Comarcas"));
        echo "</a></li>
              <li class=\"menu-item\"><a href=\"";
        // line 19
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
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Qué hacer"));
        echo "</p>
            <img class=\"separator separator-menu\" src=\"";
        // line 24
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
            <img class=\"separator-tiny\" src=\"";
        // line 25
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
            <ul class=\"menu-ul\">
              <li class=\"menu-item\"><a href=\"";
        // line 27
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/playas\">Playas</a></li>
              <li class=\"menu-item\"><a href=\"";
        // line 28
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/rutas\">Rutas</a></li>
              <li class=\"menu-item\"><a href=\"";
        // line 29
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/naturaleza\">Naturaleza</a></li>
              <li class=\"menu-item\"><a href=\"";
        // line 30
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/diversion\">Diversión</a></li>
              <li class=\"menu-item\"><a href=\"";
        // line 31
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/cultura\">Cultura</a></li>
              <li class=\"menu-item\"><a href=\"";
        // line 32
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/gastronomia\">Gastronomía</a></li>
            </ul>
          </div>
          <div class=\"menu-list\">
            <p class=\"menu-title\">";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Qué vivir"));
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
            // line 41
            echo "                <li class=\"menu-item\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
            echo "</a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "              <li class=\"menu-item\"><a href=\"";
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "/eventos\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Todos los eventos"));
        echo "</a></li>
            </ul>
          </div>
          <div class=\"menu-list\">
            <p class=\"menu-title\">";
        // line 47
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Mi estancia"));
        echo "</p>
            <img class=\"separator separator-menu\" src=\"";
        // line 48
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
            <img class=\"separator-tiny\" src=\"";
        // line 49
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
            <ul class=\"menu-ul\">
              ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu3"] ?? null), "menuItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
            echo "                <li class=\"menu-item\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
            echo "</a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
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
        // line 64
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/top-menu.svg\">
        <img class=\"mobile\" src=\"";
        // line 65
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/top-mobile.svg\">
      </div>
    </div>

    <div class=\"mini-logo-container\">
      <a href=\"";
        // line 70
        echo url("/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "\"><img src=\"";
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/mini-logo.svg\"></a>
    </div>
    <div class=\"language-container\">
      <p class=\"languages\"> <a href=\"";
        // line 73
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

    <div class=\"send-info-container\">
      <!-- Botón para enviar la experiencia -->
      <div class=\"send-info\">
        <div class=\"button-send-info\">
          <a data-izimodal-open=\"#modal-exp\">Envía la experiencia a tu móvil</a>
        </div>
      </div>
    </div>

<div id=\"modal-exp\"> <!-- data-iziModal-fullscreen=\"true\"  data-iziModal-title=\"Welcome\"  data-iziModal-subtitle=\"Subtitle\"  data-iziModal-icon=\"icon-home\" -->
    <!-- Modal content -->
    <div class=\"modal-container\">
      <img src=\"";
        // line 88
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/modal-icon.svg\">
      <h3>¿Quieres recibir esta experiencia en tu email?</h3>
      <p>Escribe tu email y en unos segundos tendrás la experiencia en tu móvl para que puedas verla siempre que quieras.</p>
      <form class=\"\" action=\"index.html\" method=\"post\">
        <input type=\"email\" name=\"mail\" placeholder=\"Escribe tu email\"/>
        <input type=\"submit\" value=\"Enviar experiencia\" data-izimodal-open=\"#modal-success\">
      </form>
    </div>
</div>

<div id=\"modal-success\"> <!-- data-iziModal-fullscreen=\"true\"  data-iziModal-title=\"Welcome\"  data-iziModal-subtitle=\"Subtitle\"  data-iziModal-icon=\"icon-home\" -->
    <!-- Modal content -->
    <div class=\"modal-container\">
      <img src=\"";
        // line 101
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/sent-icon.svg\">
      <h3>Tu experiencia ya ha llegado a tu correo</h3>
      <p>Te hemos enviado la experiencia a tu correo, disfruta de Cádiz como nunca antes.</p>
      <a href=\"#\" data-izimodal-close=\"#modal-success\" data-izimodal-open=\"#modal-exp\">¿No recibes tu experiencia?</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/headerexp.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 101,  277 => 88,  241 => 73,  231 => 70,  223 => 65,  219 => 64,  207 => 54,  196 => 52,  192 => 51,  187 => 49,  183 => 48,  179 => 47,  167 => 43,  156 => 41,  152 => 40,  147 => 38,  143 => 37,  139 => 36,  130 => 32,  124 => 31,  118 => 30,  112 => 29,  106 => 28,  100 => 27,  95 => 25,  91 => 24,  87 => 23,  76 => 19,  68 => 18,  64 => 16,  53 => 14,  49 => 13,  44 => 11,  40 => 10,  36 => 9,  25 => 5,  19 => 1,);
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
            <p class=\"menu-title\">{{'Dónde ir'|_}}</p>
            <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
            <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
            <ul class=\"menu-ul donde-ul\">
              {% for item in staticMenu.menuItems %}
                <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.viewBag[menulang] }}</a></li>
              {% endfor %}
            </ul>
            <ul class=\"menu-mobile\">
              <li class=\"menu-item\"><a href=\"{{url('/')}}/{{lang}}/comarcas\">{{'Comarcas'|_}}</a></li>
              <li class=\"menu-item\"><a href=\"{{url('/')}}/{{lang}}/municipios\">{{'Municipios'|_}}</a></li>
            </ul>
          </div>
          <div class=\"menu-list\">
            <p class=\"menu-title\">{{'Qué hacer'|_}}</p>
            <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
            <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
            <ul class=\"menu-ul\">
              <li class=\"menu-item\"><a href=\"{{url('/')}}/{{lang}}/playas\">Playas</a></li>
              <li class=\"menu-item\"><a href=\"{{url('/')}}/{{lang}}/rutas\">Rutas</a></li>
              <li class=\"menu-item\"><a href=\"{{url('/')}}/{{lang}}/naturaleza\">Naturaleza</a></li>
              <li class=\"menu-item\"><a href=\"{{url('/')}}/{{lang}}/diversion\">Diversión</a></li>
              <li class=\"menu-item\"><a href=\"{{url('/')}}/{{lang}}/cultura\">Cultura</a></li>
              <li class=\"menu-item\"><a href=\"{{url('/')}}/{{lang}}/gastronomia\">Gastronomía</a></li>
            </ul>
          </div>
          <div class=\"menu-list\">
            <p class=\"menu-title\">{{'Qué vivir'|_}}</p>
            <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
            <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
            <ul class=\"menu-ul\">
              {% for item in staticMenu2.menuItems %}
                <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.title }}</a></li>
              {% endfor %}
              <li class=\"menu-item\"><a href=\"{{url('/')}}/{{lang}}/eventos\">{{'Todos los eventos'|_}}</a></li>
            </ul>
          </div>
          <div class=\"menu-list\">
            <p class=\"menu-title\">{{'Mi estancia'|_}}</p>
            <img class=\"separator separator-menu\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/big-yellow-separator.svg\">
            <img class=\"separator-tiny\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tiny-separator.svg\">
            <ul class=\"menu-ul\">
              {% for item in staticMenu3.menuItems %}
                <li class=\"menu-item\"><a href=\"{{ item.url }}\">{{ item.title }}</a></li>
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

    <div class=\"send-info-container\">
      <!-- Botón para enviar la experiencia -->
      <div class=\"send-info\">
        <div class=\"button-send-info\">
          <a data-izimodal-open=\"#modal-exp\">Envía la experiencia a tu móvil</a>
        </div>
      </div>
    </div>

<div id=\"modal-exp\"> <!-- data-iziModal-fullscreen=\"true\"  data-iziModal-title=\"Welcome\"  data-iziModal-subtitle=\"Subtitle\"  data-iziModal-icon=\"icon-home\" -->
    <!-- Modal content -->
    <div class=\"modal-container\">
      <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/modal-icon.svg\">
      <h3>¿Quieres recibir esta experiencia en tu email?</h3>
      <p>Escribe tu email y en unos segundos tendrás la experiencia en tu móvl para que puedas verla siempre que quieras.</p>
      <form class=\"\" action=\"index.html\" method=\"post\">
        <input type=\"email\" name=\"mail\" placeholder=\"Escribe tu email\"/>
        <input type=\"submit\" value=\"Enviar experiencia\" data-izimodal-open=\"#modal-success\">
      </form>
    </div>
</div>

<div id=\"modal-success\"> <!-- data-iziModal-fullscreen=\"true\"  data-iziModal-title=\"Welcome\"  data-iziModal-subtitle=\"Subtitle\"  data-iziModal-icon=\"icon-home\" -->
    <!-- Modal content -->
    <div class=\"modal-container\">
      <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/sent-icon.svg\">
      <h3>Tu experiencia ya ha llegado a tu correo</h3>
      <p>Te hemos enviado la experiencia a tu correo, disfruta de Cádiz como nunca antes.</p>
      <a href=\"#\" data-izimodal-close=\"#modal-success\" data-izimodal-open=\"#modal-exp\">¿No recibes tu experiencia?</a>
    </div>
</div>", "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/headerexp.htm", "");
    }
}
