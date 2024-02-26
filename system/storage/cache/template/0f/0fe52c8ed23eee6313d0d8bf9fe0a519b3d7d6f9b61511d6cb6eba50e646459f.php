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
class __TwigTemplate_aa4f92f84fec363fae5e5d30c4554a9abb32c6a2e08181ac88d329699a70d6b2 extends \Twig\Template
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
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 17
        echo ($context["entry_password"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"password\" name=\"password\" value=\"";
        // line 19
        echo ($context["password"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 20
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                                    ";
        // line 21
        if (($context["error_password"] ?? null)) {
            // line 22
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                                    ";
        }
        // line 24
        echo "                                </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 27
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"password\" name=\"confirm\" value=\"";
        // line 29
        echo ($context["confirm"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 30
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                                    ";
        // line 31
        if (($context["error_confirm"] ?? null)) {
            // line 32
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                                    ";
        }
        // line 34
        echo "                                </div>
                            </div>
                        </fieldset>
                        <div class=\"buttons clearfix\">
                            <div class=\"pull-right\">
                                <input type=\"submit\" value=\"";
        // line 39
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
        // line 48
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
        return array (  136 => 48,  124 => 39,  117 => 34,  111 => 32,  109 => 31,  105 => 30,  101 => 29,  96 => 27,  91 => 24,  85 => 22,  83 => 21,  79 => 20,  75 => 19,  70 => 17,  64 => 14,  59 => 12,  55 => 11,  46 => 7,  37 => 1,);
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
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-password\">{{ entry_password }}</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"password\" name=\"password\" value=\"{{ password }}\"
                                           placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\"/>
                                    {% if error_password %}
                                        <div class=\"text-danger\">{{ error_password }}</div>
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-confirm\">{{ entry_confirm }}</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\"
                                           placeholder=\"{{ entry_confirm }}\" id=\"input-confirm\" class=\"form-control\"/>
                                    {% if error_confirm %}
                                        <div class=\"text-danger\">{{ error_confirm }}</div>
                                    {% endif %}
                                </div>
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
