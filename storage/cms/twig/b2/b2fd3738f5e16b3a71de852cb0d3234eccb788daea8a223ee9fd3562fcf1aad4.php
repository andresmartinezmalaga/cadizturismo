<?php

/* /Users/jekyll/Workspace/cadizturismo/themes/default/partials/site/footer.htm */
class __TwigTemplate_339ec07b4b07e74923c884f201c7444d1d6cb87e6add6c8463a4834d2a13ee5a extends Twig_Template
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
          <a href=\"https://www.facebook.com/CadizTurismo\"><img src=\"";
        // line 16
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/fb-icon.svg\" alt=\"facebook\"></a>
          <a href=\"https://twitter.com/CadizTurismo\"><img src=\"";
        // line 17
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/tw-icon.svg\" alt=\"twitter\"></a>
          <a href=\"https://www.youtube.com/profile?gl=US&user=PatProvTurCadiz\"><img src=\"";
        // line 18
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/yb-icon.svg\" alt=\"youtube\"></a>
          <a href=\"https://www.instagram.com/cadizturismo/\"><img src=\"";
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
        return "/Users/jekyll/Workspace/cadizturismo/themes/default/partials/site/footer.htm";
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
          <a href=\"https://www.facebook.com/CadizTurismo\"><img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/fb-icon.svg\" alt=\"facebook\"></a>
          <a href=\"https://twitter.com/CadizTurismo\"><img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/tw-icon.svg\" alt=\"twitter\"></a>
          <a href=\"https://www.youtube.com/profile?gl=US&user=PatProvTurCadiz\"><img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/yb-icon.svg\" alt=\"youtube\"></a>
          <a href=\"https://www.instagram.com/cadizturismo/\"><img src=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/insta-icon.svg\" alt=\"instagram\"></a>
        </div>
      </div>
    </div>
</footer>", "/Users/jekyll/Workspace/cadizturismo/themes/default/partials/site/footer.htm", "");
    }
}
