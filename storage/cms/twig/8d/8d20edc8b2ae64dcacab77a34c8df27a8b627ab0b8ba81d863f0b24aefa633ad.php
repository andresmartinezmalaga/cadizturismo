<?php

/* /Users/jekyll/Desktop/workspace/cadizturismo/themes/default/layouts/dinamic.htm */
class __TwigTemplate_426fa5756750075b968b2feea87501ca2253f596d5d1d668766d8b120b40daec extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"es\">

<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1\">
    <meta name=\"google-site-verification\" content=\"KZtyPnD_0KXDnRTpmvwxNoBcvj3Osx_VKrXoJaucHrE\" />
    <title>Cádiz</title>

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\"/>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css\" />

    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo url("/");
        echo "/plugins/rainlab/pages/assets/css/style-comarcas.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo url("/");
        echo "/plugins/rainlab/pages/assets/css/style-village.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo url("/");
        echo "/plugins/rainlab/pages/assets/css/style-event.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo url("/");
        echo "/plugins/rainlab/pages/assets/css/style-totalEvents.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo url("/");
        echo "/plugins/rainlab/pages/assets/css/style-home.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo url("/");
        echo "/plugins/rainlab/pages/assets/css/style-search.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo url("/");
        echo "/plugins/rainlab/pages/assets/css/style.css\"/>
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"./assets/svg/favicons/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"./assets/svg/favicons/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"./assets/svg/favicons/favicon-16x16.png\">

    <link rel=\"manifest\" href=\"";
        // line 28
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/favicons/manifest.json\">
    <link rel=\"mask-icon\" href=\"";
        // line 29
        echo url("/");
        echo "/plugins/rainlab/pages/assets/svg/favicons/safari-pinned-tab.svg\" color=\"#383838\">

    <meta name=\"theme-color\" content=\"#ffffff\">

    <style>
      .calendar.right {
        display: none !important;
      }
      .daterangepicker_input{
        display: none;
      }
    </style>

</head>

    ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "
    <!-- Content -->
    <section id=\"layout-content\">
        ";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 49
        echo "    </section>

      ";
        // line 51
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 52
        echo "
    <!-- SCRIPTS -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 60
        echo url("/");
        echo "/plugins/rainlab/pages/assets/iziModal/js/iziModal.js\"></script>


    <script type=\"text/javascript\" src=\"";
        // line 63
        echo url("/");
        echo "/plugins/rainlab/pages/assets/js/style.js\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 65
        echo url("/");
        echo "/plugins/rainlab/pages/assets/js/script-select2.js\"></script>

    <script type=\"text/javascript\" src=\"http://cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>

    <script type=\"text/javascript\" src=\"http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 70
        echo url("/");
        echo "/plugins/rainlab/pages/assets/js/range-datapicker.js\"></script>



    ";
        // line 74
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 75
        echo "
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/layouts/dinamic.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 75,  146 => 74,  139 => 70,  131 => 65,  126 => 63,  120 => 60,  110 => 52,  106 => 51,  102 => 49,  100 => 48,  95 => 45,  91 => 44,  73 => 29,  69 => 28,  61 => 23,  57 => 22,  53 => 21,  49 => 20,  45 => 19,  41 => 18,  37 => 17,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">

<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1\">
    <meta name=\"google-site-verification\" content=\"KZtyPnD_0KXDnRTpmvwxNoBcvj3Osx_VKrXoJaucHrE\" />
    <title>Cádiz</title>

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\"/>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css\" />

    <link rel=\"stylesheet\" href=\"{{url('/')}}/plugins/rainlab/pages/assets/css/style-comarcas.css\"/>
    <link rel=\"stylesheet\" href=\"{{url('/')}}/plugins/rainlab/pages/assets/css/style-village.css\"/>
    <link rel=\"stylesheet\" href=\"{{url('/')}}/plugins/rainlab/pages/assets/css/style-event.css\"/>
    <link rel=\"stylesheet\" href=\"{{url('/')}}/plugins/rainlab/pages/assets/css/style-totalEvents.css\"/>
    <link rel=\"stylesheet\" href=\"{{url('/')}}/plugins/rainlab/pages/assets/css/style-home.css\"/>
    <link rel=\"stylesheet\" href=\"{{url('/')}}/plugins/rainlab/pages/assets/css/style-search.css\"/>
    <link rel=\"stylesheet\" href=\"{{url('/')}}/plugins/rainlab/pages/assets/css/style.css\"/>
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"./assets/svg/favicons/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"./assets/svg/favicons/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"./assets/svg/favicons/favicon-16x16.png\">

    <link rel=\"manifest\" href=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/favicons/manifest.json\">
    <link rel=\"mask-icon\" href=\"{{url('/')}}/plugins/rainlab/pages/assets/svg/favicons/safari-pinned-tab.svg\" color=\"#383838\">

    <meta name=\"theme-color\" content=\"#ffffff\">

    <style>
      .calendar.right {
        display: none !important;
      }
      .daterangepicker_input{
        display: none;
      }
    </style>

</head>

    {% partial 'site/header' %}

    <!-- Content -->
    <section id=\"layout-content\">
        {% page %}
    </section>

      {% partial 'site/footer' %}

    <!-- SCRIPTS -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js\"></script>
<script type=\"text/javascript\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/iziModal/js/iziModal.js\"></script>


    <script type=\"text/javascript\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/js/style.js\"></script>

    <script type=\"text/javascript\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/js/script-select2.js\"></script>

    <script type=\"text/javascript\" src=\"http://cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>

    <script type=\"text/javascript\" src=\"http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js\"></script>
    <script type=\"text/javascript\" src=\"{{url('/')}}/plugins/rainlab/pages/assets/js/range-datapicker.js\"></script>



    {% framework %}

  </body>
</html>", "/Users/jekyll/Desktop/workspace/cadizturismo/themes/default/layouts/dinamic.htm", "");
    }
}
