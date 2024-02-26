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

/* coffee/template/account/login.twig */
class __TwigTemplate_75b7fa6055b642c94ca1f410ec6791e693931c8481bcf9ce1a65f0252e0d68ea extends \Twig\Template
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
<div id=\"account-login\" class=\"container\">
    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        // line 7
        if (($context["success"] ?? null)) {
            // line 8
            echo "        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
    ";
        }
        // line 10
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 11
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        </div>
    ";
        }
        // line 14
        echo "    <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "        ";
        }
        // line 22
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"well\">
                        <h2>";
        // line 26
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
                        <p><strong>";
        // line 27
        echo ($context["text_register"] ?? null);
        echo "</strong></p>
                        <p>";
        // line 28
        echo ($context["text_register_account"] ?? null);
        echo "</p>
                        <a href=\"";
        // line 29
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"well\">
                        <h2>";
        // line 33
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
                        <p><strong>";
        // line 34
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
                        <form action=\"";
        // line 35
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-email\">";
        // line 37
        echo ($context["entry_email"] ?? null);
        echo "</label>
                                <input type=\"text\" name=\"email\" value=\"";
        // line 38
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"
                                       id=\"input-email\" class=\"form-control\"/>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-password\">";
        // line 42
        echo ($context["entry_password"] ?? null);
        echo "</label>
                                <input type=\"password\" name=\"password\" value=\"";
        // line 43
        echo ($context["password"] ?? null);
        echo "\"
                                       placeholder=\"";
        // line 44
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                                <a href=\"";
        // line 45
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
                            <input type=\"submit\" value=\"";
        // line 46
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\"/>
                            ";
        // line 47
        if (($context["redirect"] ?? null)) {
            // line 48
            echo "                                <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
                            ";
        }
        // line 50
        echo "                        </form>
                    </div>
                </div>
            </div>
            ";
        // line 54
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 55
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 57
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 57,  186 => 55,  182 => 54,  176 => 50,  170 => 48,  168 => 47,  164 => 46,  158 => 45,  154 => 44,  150 => 43,  146 => 42,  137 => 38,  133 => 37,  128 => 35,  124 => 34,  120 => 33,  111 => 29,  107 => 28,  103 => 27,  99 => 26,  89 => 22,  86 => 21,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  71 => 16,  69 => 15,  64 => 14,  57 => 11,  54 => 10,  48 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-login\" class=\"container\">
    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    {% if success %}
        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}</div>
    {% endif %}
    {% if error_warning %}
        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
        </div>
    {% endif %}
    <div class=\"row\">{{ column_left }}
        {% if column_left and column_right %}
            {% set class = 'col-sm-6' %}
        {% elseif column_left or column_right %}
            {% set class = 'col-sm-9' %}
        {% else %}
            {% set class = 'col-sm-12' %}
        {% endif %}
        <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"well\">
                        <h2>{{ text_new_customer }}</h2>
                        <p><strong>{{ text_register }}</strong></p>
                        <p>{{ text_register_account }}</p>
                        <a href=\"{{ register }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"well\">
                        <h2>{{ text_returning_customer }}</h2>
                        <p><strong>{{ text_i_am_returning_customer }}</strong></p>
                        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-email\">{{ entry_email }}</label>
                                <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\"
                                       id=\"input-email\" class=\"form-control\"/>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-password\">{{ entry_password }}</label>
                                <input type=\"password\" name=\"password\" value=\"{{ password }}\"
                                       placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\"/>
                                <a href=\"{{ forgotten }}\">{{ text_forgotten }}</a></div>
                            <input type=\"submit\" value=\"{{ button_login }}\" class=\"btn btn-primary\"/>
                            {% if redirect %}
                                <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\"/>
                            {% endif %}
                        </form>
                    </div>
                </div>
            </div>
            {{ content_bottom }}</div>
        {{ column_right }}</div>
</div>
{{ footer }}", "coffee/template/account/login.twig", "");
    }
}
