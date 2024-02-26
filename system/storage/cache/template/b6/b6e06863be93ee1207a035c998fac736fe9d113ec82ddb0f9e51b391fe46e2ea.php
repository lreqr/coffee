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

/* coffee/template/information/information.twig */
class __TwigTemplate_dfada7b88dc2c5b592cc37c7eaae98196f4994fc7e91abe3c4f0836ea7199c65 extends \Twig\Template
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
    <h1>";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    <div class=\"row\">
      <div id=\"content\" class=\"information-block d-flex\">";
        // line 6
        echo ($context["content_top"] ?? null);
        echo "
        <div class=\"information-image-block\">
          <img src=\"http://coffee/image/catalog/about_banner.jpg\" alt=\"About company\">
        </div>
        <div class=\"information-text-block\">
          ";
        // line 11
        echo ($context["description"] ?? null);
        echo "
        </div>
      </div>
    </div>
  </div>
</main>
";
        // line 17
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  56 => 11,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main information-page\">
  <div id=\"information-information\" class=\"container\">
    <h1>{{ heading_title }}</h1>
    <div class=\"row\">
      <div id=\"content\" class=\"information-block d-flex\">{{ content_top }}
        <div class=\"information-image-block\">
          <img src=\"http://coffee/image/catalog/about_banner.jpg\" alt=\"About company\">
        </div>
        <div class=\"information-text-block\">
          {{ description }}
        </div>
      </div>
    </div>
  </div>
</main>
{{ footer }}", "coffee/template/information/information.twig", "");
    }
}
