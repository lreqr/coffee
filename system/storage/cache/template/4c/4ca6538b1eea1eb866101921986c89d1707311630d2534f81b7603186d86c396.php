<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* coffee/template/common/success.twig */
class __TwigTemplate_5bfeba91988ca5c63e612277203c5b314e0edd25adabe3a3a255b9fad80264ba extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"common-success\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"";
        // line 4
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 6
        echo ($context["text_message"] ?? null);
        echo "
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
        // line 8
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 10
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 11
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 13
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/common/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 13,  69 => 11,  65 => 10,  58 => 8,  53 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"common-success\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      {{ text_message }}
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}", "coffee/template/common/success.twig", "");
    }
}
