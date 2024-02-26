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
class __TwigTemplate_2db4a90754808222b83ecd9ffb0b01b7964a4e81368294c56585073c555124ea extends \Twig\Template
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
      <div id=\"content\" class=\"d-flex justify-content-center\">";
        // line 6
        echo ($context["content_top"] ?? null);
        echo "
        <div class=\"information-image-block\">
          <img src=\"http://coffee/image/catalog/about_banner.jpg\" alt=\"About company\">
        </div>
        ";
        // line 10
        echo ($context["description"] ?? null);
        echo "</div>
    </div>
  </div>
</main>
";
        // line 14
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
        return array (  62 => 14,  55 => 10,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main information-page\">
  <div id=\"information-information\" class=\"container\">
    <h1>{{ heading_title }}</h1>
    <div class=\"row\">
      <div id=\"content\" class=\"d-flex justify-content-center\">{{ content_top }}
        <div class=\"information-image-block\">
          <img src=\"http://coffee/image/catalog/about_banner.jpg\" alt=\"About company\">
        </div>
        {{ description }}</div>
    </div>
  </div>
</main>
{{ footer }}", "coffee/template/information/information.twig", "");
    }
}
