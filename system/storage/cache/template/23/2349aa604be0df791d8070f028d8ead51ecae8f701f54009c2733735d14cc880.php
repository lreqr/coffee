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

/* coffee/template/account/password.twig */
class __TwigTemplate_ef88c14b48160daf1024bd992d094b0a53e4ec5fb34152109746ecb2658a6bc1 extends \Twig\Template
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
<div id=\"account-password\" class=\"container\">
  <div class=\"row login-row\">
    <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
      <div class=\"login-block-register\">
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <form action=\"";
        // line 10
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 12
        echo ($context["text_password"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 14
        echo ($context["entry_password"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 16
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 17
        if (($context["error_password"] ?? null)) {
            // line 18
            echo "              <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
              ";
        }
        // line 20
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 23
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 25
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
              ";
        // line 26
        if (($context["error_confirm"] ?? null)) {
            // line 27
            echo "              <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
              ";
        }
        // line 29
        echo "            </div>
          </div>
        </fieldset>
        <div class=\"buttons clearfix\">
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 34
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
      </div>
    </div>
</div>
</main>
";
        // line 42
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/account/password.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 42,  117 => 34,  110 => 29,  104 => 27,  102 => 26,  96 => 25,  91 => 23,  86 => 20,  80 => 18,  78 => 17,  72 => 16,  67 => 14,  62 => 12,  57 => 10,  53 => 9,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main register-page\">
<div id=\"account-password\" class=\"container\">
  <div class=\"row login-row\">
    <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
      <div class=\"login-block-register\">
        <a href=\"{{ back }}\" class=\"btn btn-default\">{{ button_back }}</a>
      </div>
      <h1>{{ heading_title }}</h1>
      <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>{{ text_password }}</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\">{{ entry_password }}</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" />
              {% if error_password %}
              <div class=\"text-danger\">{{ error_password }}</div>
              {% endif %}
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-confirm\">{{ entry_confirm }}</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\" placeholder=\"{{ entry_confirm }}\" id=\"input-confirm\" class=\"form-control\" />
              {% if error_confirm %}
              <div class=\"text-danger\">{{ error_confirm }}</div>
              {% endif %}
            </div>
          </div>
        </fieldset>
        <div class=\"buttons clearfix\">
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"{{ button_continue }}\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
      </div>
    </div>
</div>
</main>
{{ footer }}", "coffee/template/account/password.twig", "");
    }
}
