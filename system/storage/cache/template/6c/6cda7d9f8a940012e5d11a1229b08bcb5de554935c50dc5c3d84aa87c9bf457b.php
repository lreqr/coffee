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

/* default/template/information/information.twig */
class __TwigTemplate_e01d94d1acecc756a8d041c8156756206fa1cecf503f630d86ce2bb3908a7359 extends \Twig\Template
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
  <div id=\"information-information\" class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"\">";
        // line 5
        echo ($context["content_top"] ?? null);
        echo "
        <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        ";
        // line 7
        echo ($context["description"] ?? null);
        echo "</div>
    </div>
  </div>
</main>
";
        // line 11
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  52 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main information-page\">
  <div id=\"information-information\" class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"\">{{ content_top }}
        <h1>{{ heading_title }}</h1>
        {{ description }}</div>
    </div>
  </div>
</main>
{{ footer }}", "default/template/information/information.twig", "");
    }
}
