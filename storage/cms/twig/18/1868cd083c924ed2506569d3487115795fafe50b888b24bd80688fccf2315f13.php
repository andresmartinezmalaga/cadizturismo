<?php

/* /Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/footer.htm */
class __TwigTemplate_7104d5b3b804faa433fce85753f92f1f12fa201237eaee899a345480595241b7 extends Twig_Template
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
        echo "<footer>
    <div class=\"footer-container\">
      <div class=\"left-container\">
        <img class=\"mini-logo\" src=\"";
        // line 4
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/mini-logo.svg\" alt=\"logo cádiz\">
        <div class=\"links-container\">
          <a href=\"#\">Sobre nosotros</a>
          <a href=\"#\">Sala de prensa</a>
          <a href=\"#\">Publicaciones</a>
          <a href=\"#\">¿Necesitas ayuda?</a>
          <a href=\"#\">Aviso legal</a>
        </div>
      </div>
      <div class=\"copy-social-container\">
        <p class=\"date\">&copy; ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Cádiz Turismo</p>
        <div class=\"social\">
          <a href=\"#\"><img src=\"";
        // line 16
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/fb-icon.svg\" alt=\"facebook\"></a>
          <a href=\"#\"><img src=\"";
        // line 17
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tw-icon.svg\" alt=\"twitter\"></a>
          <a href=\"#\"><img src=\"";
        // line 18
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/yb-icon.svg\" alt=\"youtube\"></a>
          <a href=\"#\"><img src=\"";
        // line 19
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/insta-icon.svg\" alt=\"instagram\"></a>
        </div>
      </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  50 => 18,  46 => 17,  42 => 16,  37 => 14,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
    <div class=\"footer-container\">
      <div class=\"left-container\">
        <img class=\"mini-logo\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/mini-logo.svg\" alt=\"logo cádiz\">
        <div class=\"links-container\">
          <a href=\"#\">Sobre nosotros</a>
          <a href=\"#\">Sala de prensa</a>
          <a href=\"#\">Publicaciones</a>
          <a href=\"#\">¿Necesitas ayuda?</a>
          <a href=\"#\">Aviso legal</a>
        </div>
      </div>
      <div class=\"copy-social-container\">
        <p class=\"date\">&copy; {{ \"now\"|date(\"Y\") }} Cádiz Turismo</p>
        <div class=\"social\">
          <a href=\"#\"><img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/fb-icon.svg\" alt=\"facebook\"></a>
          <a href=\"#\"><img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tw-icon.svg\" alt=\"twitter\"></a>
          <a href=\"#\"><img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/yb-icon.svg\" alt=\"youtube\"></a>
          <a href=\"#\"><img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/insta-icon.svg\" alt=\"instagram\"></a>
        </div>
      </div>
    </div>
</footer>", "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/partials/site/footer.htm", "");
    }
}
