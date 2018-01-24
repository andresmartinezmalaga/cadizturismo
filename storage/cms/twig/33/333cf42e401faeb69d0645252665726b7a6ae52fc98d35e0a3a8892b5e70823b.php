<?php

/* /Users/jekyll/workspace/cadizturismo/themes/default/partials/site/headerexp.htm */
class __TwigTemplate_c65e010b7384911098ab8bb70c6d4e10ec94c591219d3ec4610cee1024e93812 extends Twig_Template
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
      <a data-izimodal-open=\"#modal-exp\">Envía la experiencia a tu móvil</a>
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
        // line 29
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
        return "/Users/jekyll/workspace/cadizturismo/themes/default/partials/site/headerexp.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 29,  41 => 16,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- MENU-->
{% partial \"site/menu\" %}  

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
</div>", "/Users/jekyll/workspace/cadizturismo/themes/default/partials/site/headerexp.htm", "");
    }
}
