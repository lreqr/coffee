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
class __TwigTemplate_81030bf2ff7575ddb7b9457eb967ea6825cd9a13ddfa523cc9dd416b6a0393a3 extends \Twig\Template
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
        <div id=\"content\" class=\"information-block d-flex\">
            <div class=\"information-image-block\">
                <img src=\"";
        // line 7
        echo ($context["content_top"] ?? null);
        echo "\" alt=\"About company\">
            </div>
            <div class=\"information-text-block\">
                ";
        // line 10
        echo ($context["description"] ?? null);
        echo "
            </div>
        </div>
    </div>
</main>
";
        // line 15
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
        return array (  63 => 15,  55 => 10,  49 => 7,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main information-page\">
    <div id=\"information-information\" class=\"container\">
        <h1>{{ heading_title }}</h1>
        <div id=\"content\" class=\"information-block d-flex\">
            <div class=\"information-image-block\">
                <img src=\"{{ content_top }}\" alt=\"About company\">
            </div>
            <div class=\"information-text-block\">
                {{ description }}
            </div>
        </div>
    </div>
</main>
{{ footer }}", "coffee/template/information/information.twig", "");
    }
}
