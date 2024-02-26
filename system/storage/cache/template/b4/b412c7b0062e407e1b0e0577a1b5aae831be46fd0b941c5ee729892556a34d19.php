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
class __TwigTemplate_df2cb48ea7f170bc9971b9d8ef8273bf2bf89c62f673190f75eaf35af4b377b1 extends \Twig\Template
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
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <form action=\"";
        // line 7
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 9
        echo ($context["text_password"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 11
        echo ($context["entry_password"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 13
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 14
        if (($context["error_password"] ?? null)) {
            // line 15
            echo "              <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
              ";
        }
        // line 17
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 20
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 22
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
              ";
        // line 23
        if (($context["error_confirm"] ?? null)) {
            // line 24
            echo "              <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
              ";
        }
        // line 26
        echo "            </div>
          </div>
        </fieldset>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 30
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 32
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
      ";
        // line 36
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 37
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
</main>
";
        // line 40
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
        return array (  132 => 40,  126 => 37,  122 => 36,  115 => 32,  108 => 30,  102 => 26,  96 => 24,  94 => 23,  88 => 22,  83 => 20,  78 => 17,  72 => 15,  70 => 14,  64 => 13,  59 => 11,  54 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main register-page\">
<div id=\"account-password\" class=\"container\">
  <div class=\"row login-row\">
    <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
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
          <div class=\"pull-left\"><a href=\"{{ back }}\" class=\"btn btn-default\">{{ button_back }}</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"{{ button_continue }}\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
</main>
{{ footer }}", "coffee/template/account/password.twig", "");
    }
}
