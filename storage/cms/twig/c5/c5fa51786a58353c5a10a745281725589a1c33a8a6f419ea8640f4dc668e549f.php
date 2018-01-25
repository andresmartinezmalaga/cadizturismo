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
";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "  

<div class=\"send-info-container\">
  <!-- Botón para enviar la experiencia -->
  <div class=\"send-info\">
    <div class=\"button-send-info\">
      <a data-izimodal-open=\"#modal-exp\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Envía la experiencia a tu móvil"));
        echo "</a>
    </div>
  </div>
</div>

<div id=\"modal-exp\"> <!-- data-iziModal-fullscreen=\"true\"  data-iziModal-title=\"Welcome\"  data-iziModal-subtitle=\"Subtitle\"  data-iziModal-icon=\"icon-home\" -->
    <!-- Modal content -->
    <div class=\"modal-container\">
      <img src=\"";
        // line 16
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/modal-icon.svg\">
      <h3>";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("¿Quieres recibir esta experiencia en tu email?"));
        echo "</h3>
      <p>";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Escribe tu email y en unos segundos tendrás la experiencia en tu móvl para que puedas verla siempre que quieras."));
        echo "</p>
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
        // line 29
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/sent-icon.svg\">
      <h3>";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Tu experiencia ya ha llegado a tu correo"));
        echo "</h3>
      <p>";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Te hemos enviado la experiencia a tu correo, disfruta de Cádiz como nunca antes."));
        echo "</p>
      <a href=\"#\" data-izimodal-close=\"#modal-success\" data-izimodal-open=\"#modal-exp\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("¿No recibes tu experiencia?"));
        echo "</a>
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
        return array (  78 => 32,  74 => 31,  70 => 30,  66 => 29,  52 => 18,  48 => 17,  44 => 16,  33 => 8,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- MENU-->
{% partial \"site/menu\" %}  

<div class=\"send-info-container\">
  <!-- Botón para enviar la experiencia -->
  <div class=\"send-info\">
    <div class=\"button-send-info\">
      <a data-izimodal-open=\"#modal-exp\">{{'Envía la experiencia a tu móvil'|_}}</a>
    </div>
  </div>
</div>

<div id=\"modal-exp\"> <!-- data-iziModal-fullscreen=\"true\"  data-iziModal-title=\"Welcome\"  data-iziModal-subtitle=\"Subtitle\"  data-iziModal-icon=\"icon-home\" -->
    <!-- Modal content -->
    <div class=\"modal-container\">
      <img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/modal-icon.svg\">
      <h3>{{'¿Quieres recibir esta experiencia en tu email?'|_}}</h3>
      <p>{{'Escribe tu email y en unos segundos tendrás la experiencia en tu móvl para que puedas verla siempre que quieras.'|_}}</p>
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
      <h3>{{'Tu experiencia ya ha llegado a tu correo'|_}}</h3>
      <p>{{'Te hemos enviado la experiencia a tu correo, disfruta de Cádiz como nunca antes.'|_}}</p>
      <a href=\"#\" data-izimodal-close=\"#modal-success\" data-izimodal-open=\"#modal-exp\">{{'¿No recibes tu experiencia?'|_}}</a>
    </div>
</div>", "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/headerexp.htm", "");
    }
}
