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
class __TwigTemplate_a4b42213372c25f772bdac3881e47d33b7a2e9a4643f8337b06983b7a80a9cd7 extends \Twig\Template
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
<main class=\"main logout-page\">

  <div id=\"common-success\" class=\"container\">
    <div class=\"row login-row\">
      <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
        <div class=\"login-block-wrapper\">
          <div class=\"login-block-title\">
          <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          ";
        // line 10
        echo ($context["text_message"] ?? null);
        echo "
          </div>
          <div class=\"buttons d-flex justify-content-center\">
            <div class=\"pull-right\"><a href=\"";
        // line 13
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-warning\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

";
        // line 22
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
        return array (  72 => 22,  58 => 13,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main logout-page\">

  <div id=\"common-success\" class=\"container\">
    <div class=\"row login-row\">
      <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
        <div class=\"login-block-wrapper\">
          <div class=\"login-block-title\">
          <h1>{{ heading_title }}</h1>
          {{ text_message }}
          </div>
          <div class=\"buttons d-flex justify-content-center\">
            <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-warning\">{{ button_continue }}</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

{{ footer }}", "coffee/template/common/success.twig", "");
    }
}
