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
class __TwigTemplate_5b18f916355059a3628159d16f46fe1c345eaaac77a9c26cab6ca7f28ce375ed extends \Twig\Template
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
      </div>
    <div class=\"buttons\">
      <div class=\"pull-right\"><a href=\"";
        // line 9
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
    </div>
  </div>
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
        return array (  68 => 13,  59 => 9,  53 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"common-success\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      {{ text_message }}
      </div>
    <div class=\"buttons\">
      <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
    </div>
  </div>
</div>
{{ footer }}", "coffee/template/common/success.twig", "");
    }
}
