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
class __TwigTemplate_fae80b88146b97a2e4dfce16acfd140b67436572d264eca684130c42f9259231 extends \Twig\Template
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
<main class=\"main register-page\">

  <div id=\"common-success\" class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
        <h1>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        ";
        // line 8
        echo ($context["text_message"] ?? null);
        echo "
      </div>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
        // line 11
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
    </div>
  </div>

</main>

";
        // line 18
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
        return array (  68 => 18,  56 => 11,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main register-page\">

  <div id=\"common-success\" class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
        <h1>{{ heading_title }}</h1>
        {{ text_message }}
      </div>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      </div>
    </div>
  </div>

</main>

{{ footer }}", "coffee/template/common/success.twig", "");
    }
}
