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

/* coffee/template/information/sitemap.twig */
class __TwigTemplate_ff97aa6178181ff6479e50f01e9c0c9c993c742855a6d802e28556fb8c5609c7 extends \Twig\Template
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
<div id=\"information-sitemap\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"\">
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 6
        echo ($context["content_top"] ?? null);
        echo "

      </div>
    </div>
</div>
";
        // line 11
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/information/sitemap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"information-sitemap\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"\">
      <h1>{{ heading_title }}</h1>
      {{ content_top }}

      </div>
    </div>
</div>
{{ footer }}", "coffee/template/information/sitemap.twig", "");
    }
}
