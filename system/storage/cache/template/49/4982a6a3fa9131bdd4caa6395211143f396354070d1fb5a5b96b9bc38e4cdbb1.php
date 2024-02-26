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
class __TwigTemplate_25780d25b64a76ddde7d275945df50827d128616b997448ac5cf740d78b3d323 extends \Twig\Template
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
    ";
        // line 8
        echo ($context["column_right"] ?? null);
        echo "
    <div class=\"buttons\">
      <div class=\"pull-right\"><a href=\"";
        // line 10
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
    </div>
  </div>
</div>
";
        // line 14
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
        return array (  72 => 14,  63 => 10,  58 => 8,  53 => 6,  49 => 5,  43 => 4,  37 => 1,);
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
    {{ column_right }}
    <div class=\"buttons\">
      <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
    </div>
  </div>
</div>
{{ footer }}", "coffee/template/common/success.twig", "");
    }
}
