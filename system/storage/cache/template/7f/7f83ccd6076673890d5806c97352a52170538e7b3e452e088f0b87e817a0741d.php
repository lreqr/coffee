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

/* default/template/checkout/login.twig */
class __TwigTemplate_c285ab2a21386a8e23585001bcda879bbb72e7d20e269f0393a59af9527cd242 extends \Twig\Template
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
        echo "<div class=\"row\">
  <div class=\"col-sm-6\">
    <h2>";
        // line 3
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
    <p>";
        // line 4
        echo ($context["text_checkout"] ?? null);
        echo "</p>
    <div class=\"radio\">
      <label> ";
        // line 6
        if ((($context["account"] ?? null) == "register")) {
            // line 7
            echo "        <input type=\"radio\" name=\"account\" value=\"register\" checked=\"checked\" />
        ";
        } else {
            // line 9
            echo "        <input type=\"radio\" name=\"account\" value=\"register\" />
        ";
        }
        // line 11
        echo "        ";
        echo ($context["text_register"] ?? null);
        echo "</label>
    </div>
    ";
        // line 13
        if (($context["checkout_guest"] ?? null)) {
            // line 14
            echo "    <div class=\"radio\">
      <label> ";
            // line 15
            if ((($context["account"] ?? null) == "guest")) {
                // line 16
                echo "        <input type=\"radio\" name=\"account\" value=\"guest\" checked=\"checked\" />
        ";
            } else {
                // line 18
                echo "        <input type=\"radio\" name=\"account\" value=\"guest\" />
        ";
            }
            // line 20
            echo "        ";
            echo ($context["text_guest"] ?? null);
            echo "</label>
    </div>
    ";
        }
        // line 23
        echo "    <p>";
        echo ($context["text_register_account"] ?? null);
        echo "</p>
    <input type=\"button\" value=\"";
        // line 24
        echo ($context["button_continue"] ?? null);
        echo "\" id=\"button-account\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
  </div>
  <div class=\"col-sm-6\">
    <h2>";
        // line 27
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
    <p>";
        // line 28
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</p>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-email\">";
        // line 30
        echo ($context["entry_email"] ?? null);
        echo "</label>
      <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 31
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
    </div>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-password\">";
        // line 34
        echo ($context["entry_password"] ?? null);
        echo "</label>
      <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 35
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
      <a href=\"";
        // line 36
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
    <input type=\"button\" value=\"";
        // line 37
        echo ($context["button_login"] ?? null);
        echo "\" id=\"button-login\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 37,  128 => 36,  124 => 35,  120 => 34,  114 => 31,  110 => 30,  105 => 28,  101 => 27,  93 => 24,  88 => 23,  81 => 20,  77 => 18,  73 => 16,  71 => 15,  68 => 14,  66 => 13,  60 => 11,  56 => 9,  52 => 7,  50 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
  <div class=\"col-sm-6\">
    <h2>{{ text_new_customer }}</h2>
    <p>{{ text_checkout }}</p>
    <div class=\"radio\">
      <label> {% if account == 'register' %}
        <input type=\"radio\" name=\"account\" value=\"register\" checked=\"checked\" />
        {% else %}
        <input type=\"radio\" name=\"account\" value=\"register\" />
        {% endif %}
        {{ text_register }}</label>
    </div>
    {% if checkout_guest %}
    <div class=\"radio\">
      <label> {% if account == 'guest' %}
        <input type=\"radio\" name=\"account\" value=\"guest\" checked=\"checked\" />
        {% else %}
        <input type=\"radio\" name=\"account\" value=\"guest\" />
        {% endif %}
        {{ text_guest }}</label>
    </div>
    {% endif %}
    <p>{{ text_register_account }}</p>
    <input type=\"button\" value=\"{{ button_continue }}\" id=\"button-account\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-primary\" />
  </div>
  <div class=\"col-sm-6\">
    <h2>{{ text_returning_customer }}</h2>
    <p>{{ text_i_am_returning_customer }}</p>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-email\">{{ entry_email }}</label>
      <input type=\"text\" name=\"email\" value=\"\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" />
    </div>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-password\">{{ entry_password }}</label>
      <input type=\"password\" name=\"password\" value=\"\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" />
      <a href=\"{{ forgotten }}\">{{ text_forgotten }}</a></div>
    <input type=\"button\" value=\"{{ button_login }}\" id=\"button-login\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-primary\" />
  </div>
</div>
", "default/template/checkout/login.twig", "");
    }
}
