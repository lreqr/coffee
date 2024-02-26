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
class __TwigTemplate_0b3c1929990420ba42b7d7eb262421aa8820ea4c197d39d7c0f2cb71f56b7290 extends \Twig\Template
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
                <div class=\"login-block-wrapper\">
                    <div class=\"login-block-title\">
                        <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                        <p>";
        // line 12
        echo ($context["text_password"] ?? null);
        echo "</p>
                    </div>
                    <form action=\"";
        // line 14
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                        <fieldset>
                            <div class=\"row\">
                                ";
        // line 17
        if (($context["error_password"] ?? null)) {
            // line 18
            echo "                                    <div class=\"col-sm-6\">
                                        <div class=\"text-danger\">";
            // line 19
            echo ($context["error_password"] ?? null);
            echo "</div>
                                    </div>
                                ";
        }
        // line 22
        echo "                                ";
        if (($context["error_confirm"] ?? null)) {
            // line 23
            echo "                                    <div class=\"col-sm-6\">
                                        <div class=\"text-danger\">";
            // line 24
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                                    </div>
                                ";
        }
        // line 27
        echo "                            </div>
                            <div class=\"password-block form-group required\">
                                <input type=\"password\" name=\"password\" value=\"";
        // line 29
        echo ($context["password"] ?? null);
        echo "\"
                                       placeholder=\"";
        // line 30
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                                <input type=\"password\" name=\"confirm\" value=\"";
        // line 31
        echo ($context["confirm"] ?? null);
        echo "\"
                                       placeholder=\"";
        // line 32
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                            </div>
                        </fieldset>
                        <div class=\"buttons clearfix\">
                            <div class=\"pull-right\">
                                <input type=\"submit\" value=\"";
        // line 37
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
";
        // line 46
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
        return array (  129 => 46,  117 => 37,  109 => 32,  105 => 31,  101 => 30,  97 => 29,  93 => 27,  87 => 24,  84 => 23,  81 => 22,  75 => 19,  72 => 18,  70 => 17,  64 => 14,  59 => 12,  55 => 11,  46 => 7,  37 => 1,);
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
                <div class=\"login-block-wrapper\">
                    <div class=\"login-block-title\">
                        <h1>{{ heading_title }}</h1>
                        <p>{{ text_password }}</p>
                    </div>
                    <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                        <fieldset>
                            <div class=\"row\">
                                {% if error_password %}
                                    <div class=\"col-sm-6\">
                                        <div class=\"text-danger\">{{ error_password }}</div>
                                    </div>
                                {% endif %}
                                {% if error_confirm %}
                                    <div class=\"col-sm-6\">
                                        <div class=\"text-danger\">{{ error_confirm }}</div>
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"password-block form-group required\">
                                <input type=\"password\" name=\"password\" value=\"{{ password }}\"
                                       placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\"/>
                                <input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\"
                                       placeholder=\"{{ entry_confirm }}\" id=\"input-confirm\" class=\"form-control\"/>
                            </div>
                        </fieldset>
                        <div class=\"buttons clearfix\">
                            <div class=\"pull-right\">
                                <input type=\"submit\" value=\"{{ button_continue }}\" class=\"btn btn-primary\"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
{{ footer }}", "coffee/template/account/password.twig", "");
    }
}
