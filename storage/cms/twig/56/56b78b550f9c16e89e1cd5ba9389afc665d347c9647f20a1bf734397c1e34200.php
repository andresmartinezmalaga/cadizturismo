<?php

/* /Users/jekyll/Workspace/cadizTurismo/themes/default/partials/allevents.htm */
class __TwigTemplate_796174ae4d4318c3bfbb26601126d13da28625d517369b52eab8bc427e9451f7 extends Twig_Template
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
        echo "<div class=\"more-popular\">
  \t<div class=\"title-container\">
    <p class=\"title\">MÁS <br> POPULARES <br> EN CÁDIZ </p>
      <img class=\"separator\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["preurl"] ?? null), "html", null, true);
        echo "/storage/app/media/uploaded-files/templates/big-yellow-separator.svg\">
  \t</div>
 \t<div class=\"main-events-container\">
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 8
            echo "\t    <!--  MÁS POPULARES -->
        <div class=\"event\">
          <div class=\"overlay-img\"></div>
          <img class=\"rec-img\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "viewBag", array()), "cover", array()), "html", null, true);
            echo "\">
          <div class=\"txt-container\">
            <p class=\"date\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "date_start_pretty_day", array()), "html", null, true);
            echo " ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "date_start_pretty_month", array())));
            echo "</p>
            <p class=\"name\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "viewBag", array()), "title", array()), "html", null, true);
            echo "</p>
            <img class=\"separator\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["preurl"] ?? null), "html", null, true);
            echo "/storage/app/media/uploaded-files/templates/small-yellow-separator.svg\">
            <div class=\"icons\">
              <div class=\"icon-pair\">
                <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["preurl"] ?? null), "html", null, true);
            echo "/storage/app/media/uploaded-files/templates/natu-events.svg\">
                <p class=\"icon-txt\">Naturaleza</p>
              </div>
              <div class=\"icon-pair\">
                <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["preurl"] ?? null), "html", null, true);
            echo "/storage/app/media/uploaded-files/templates/loc-events.svg\">
                <p class=\"icon-txt\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "location", array()), "html", null, true);
            echo "</p>
              </div>
            </div>
            <div class=\"button-container\">
              <a class=\"see-event\" href=\"";
            // line 27
            echo url("/");
            echo "/";
            echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "viewBag", array()), "url", array()), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Ver evento"));
            echo "_ <img src=\"";
            echo twig_escape_filter($this->env, ($context["preurl"] ?? null), "html", null, true);
            echo "/storage/app/media/uploaded-files/templates/link-icon.svg\"></a>
            </div>
          </div>
        </div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/jekyll/Workspace/cadizTurismo/themes/default/partials/allevents.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  78 => 27,  71 => 23,  67 => 22,  60 => 18,  54 => 15,  50 => 14,  44 => 13,  39 => 11,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"more-popular\">
  \t<div class=\"title-container\">
    <p class=\"title\">MÁS <br> POPULARES <br> EN CÁDIZ </p>
      <img class=\"separator\" src=\"{{preurl}}/storage/app/media/uploaded-files/templates/big-yellow-separator.svg\">
  \t</div>
 \t<div class=\"main-events-container\">
\t{% for event in events %}
\t    <!--  MÁS POPULARES -->
        <div class=\"event\">
          <div class=\"overlay-img\"></div>
          <img class=\"rec-img\" src=\"{{event.viewBag.cover}}\">
          <div class=\"txt-container\">
            <p class=\"date\">{{event.date_start_pretty_day}} {{event.date_start_pretty_month|_}}</p>
            <p class=\"name\">{{event.viewBag.title}}</p>
            <img class=\"separator\" src=\"{{preurl}}/storage/app/media/uploaded-files/templates/small-yellow-separator.svg\">
            <div class=\"icons\">
              <div class=\"icon-pair\">
                <img src=\"{{preurl}}/storage/app/media/uploaded-files/templates/natu-events.svg\">
                <p class=\"icon-txt\">Naturaleza</p>
              </div>
              <div class=\"icon-pair\">
                <img src=\"{{preurl}}/storage/app/media/uploaded-files/templates/loc-events.svg\">
                <p class=\"icon-txt\">{{event.location}}</p>
              </div>
            </div>
            <div class=\"button-container\">
              <a class=\"see-event\" href=\"{{url('/')}}/{{lang}}{{event.viewBag.url}}\">{{'Ver evento'|_}}_ <img src=\"{{preurl}}/storage/app/media/uploaded-files/templates/link-icon.svg\"></a>
            </div>
          </div>
        </div>

\t{% endfor %}
\t</div>
</div>", "/Users/jekyll/Workspace/cadizTurismo/themes/default/partials/allevents.htm", "");
    }
}
