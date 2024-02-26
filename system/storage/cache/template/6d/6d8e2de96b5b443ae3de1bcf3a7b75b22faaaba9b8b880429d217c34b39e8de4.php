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
class __TwigTemplate_ebeb6eab02a3a48a15f6bb4a33c26e3cd200a842ef0006b95a56d40147e30df6 extends \Twig\Template
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
<div id=\"account-password\" class=\"container\">
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
      <form action=\"";
        // line 6
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 8
        echo ($context["text_password"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 10
        echo ($context["entry_password"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 12
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 13
        if (($context["error_password"] ?? null)) {
            // line 14
            echo "              <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
              ";
        }
        // line 16
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 19
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 21
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
              ";
        // line 22
        if (($context["error_confirm"] ?? null)) {
            // line 23
            echo "              <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
              ";
        }
        // line 25
        echo "            </div>
          </div>
        </fieldset>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 29
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 31
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
      ";
        // line 35
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 36
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 38
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
        return array (  135 => 38,  130 => 36,  126 => 35,  119 => 31,  112 => 29,  106 => 25,  100 => 23,  98 => 22,  92 => 21,  87 => 19,  82 => 16,  76 => 14,  74 => 13,  68 => 12,  63 => 10,  58 => 8,  53 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-password\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
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
{{ footer }}", "coffee/template/account/password.twig", "");
    }
}
