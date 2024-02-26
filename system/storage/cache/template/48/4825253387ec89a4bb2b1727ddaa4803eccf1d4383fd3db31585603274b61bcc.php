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
class __TwigTemplate_426816ee1c3a1f2815df4323ad0f856b6100d8f0e8130682a01b39089c567c7f extends \Twig\Template
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
    <div id=\"content\" class=\"\">";
        // line 4
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      
      </div>
    </div>
</div>
";
        // line 10
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
        return array (  55 => 10,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"information-sitemap\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      
      </div>
    </div>
</div>
{{ footer }}", "coffee/template/information/sitemap.twig", "");
    }
}
