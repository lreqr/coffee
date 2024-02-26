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
class __TwigTemplate_551df8270a4fd28e286020a68f7838cfe86bef370cfe1e4d02702e07de2cc8d3 extends \Twig\Template
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
                    <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                    <form action=\"";
        // line 11
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                        <fieldset>
                            <legend>";
        // line 13
        echo ($context["text_password"] ?? null);
        echo "</legend>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 15
        echo ($context["entry_password"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"password\" name=\"password\" value=\"";
        // line 17
        echo ($context["password"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 18
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                                    ";
        // line 19
        if (($context["error_password"] ?? null)) {
            // line 20
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                                    ";
        }
        // line 22
        echo "                                </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 25
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"password\" name=\"confirm\" value=\"";
        // line 27
        echo ($context["confirm"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 28
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                                    ";
        // line 29
        if (($context["error_confirm"] ?? null)) {
            // line 30
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                                    ";
        }
        // line 32
        echo "                                </div>
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
        return array (  134 => 46,  122 => 37,  115 => 32,  109 => 30,  107 => 29,  103 => 28,  99 => 27,  94 => 25,  89 => 22,  83 => 20,  81 => 19,  77 => 18,  73 => 17,  68 => 15,  63 => 13,  58 => 11,  54 => 10,  46 => 7,  37 => 1,);
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
                    <h1>{{ heading_title }}</h1>
                    <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                        <fieldset>
                            <legend>{{ text_password }}</legend>
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
