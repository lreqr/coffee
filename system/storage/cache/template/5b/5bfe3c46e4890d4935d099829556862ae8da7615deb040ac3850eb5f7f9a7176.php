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
class __TwigTemplate_d220a8452fb9348088db8f5c5db1bc308b788c6ea39365cba976705cb7c2db91 extends \Twig\Template
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
<main class=\"main information-page\">
  <div id=\"information-sitemap\" class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"\">
        <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        ";
        // line 7
        echo ($context["content_top"] ?? null);
        echo "

      </div>
    </div>
  </div>
</main>

";
        // line 14
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
        return array (  59 => 14,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main information-page\">
  <div id=\"information-sitemap\" class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"\">
        <h1>{{ heading_title }}</h1>
        {{ content_top }}

      </div>
    </div>
  </div>
</main>

{{ footer }}", "coffee/template/information/sitemap.twig", "");
    }
}
