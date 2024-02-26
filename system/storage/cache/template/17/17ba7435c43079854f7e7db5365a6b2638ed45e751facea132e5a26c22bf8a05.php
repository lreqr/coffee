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
class __TwigTemplate_74d02c2ef4fd796dbd573a934923ff18dcd7a0a33a699686a8f9a762b78b1c13 extends \Twig\Template
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
";
        // line 2
        if (($context["success"] ?? null)) {
            // line 3
            echo "    <div class=\"alert alert-success alert-dismissible fade show my-3\" role=\"alert\">
        ";
            // line 4
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
";
        }
        // line 8
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 9
            echo "        <div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\">
            ";
            // line 10
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        // line 14
        echo "<main class=\"main login-page\">
    <div class=\"container\">

        <div class=\"row login-row\">
            <div class=\"col-6 login-block\">";
        // line 18
        echo ($context["content_top"] ?? null);
        echo "
                <div class=\"login-block-register\">
                    <p>";
        // line 20
        echo ($context["text_new_customer"] ?? null);
        echo " <a href=\"\" class=\"register\">";
        echo ($context["text_register"] ?? null);
        echo "</a></p>
                </div>
                <div class=\"login-block-wrapper\">
                    <div class=\"login-block-title\">
                        <h1>";
        // line 24
        echo ($context["text_returning_customer"] ?? null);
        echo "</h1>
                        <p class=\"under-title\">";
        // line 25
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</p>
                    </div>
                    <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 29
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"
                                   id=\"input-email\" class=\"form-control\">
                        </div>
                        <div class=\"form-group form-group-pass\">
                            <input type=\"password\" name=\"password\" value=\"";
        // line 33
        echo ($context["password"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 34
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\">
                            <span id=\"icon-eye\" class=\"icon-eye-blocked\"></span>
                            <a href=\"#\" class=\"forgot-pass\">Forgot password?</a>
                        </div>
                        <input type=\"submit\" class=\"btn btn-warning\" value=\"";
        // line 38
        echo ($context["button_login"] ?? null);
        echo "\">
                        ";
        // line 39
        if (($context["redirect"] ?? null)) {
            // line 40
            echo "                            <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
                        ";
        }
        // line 42
        echo "                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<div id=\"account-login\" class=\"container my-3\">
    <div class=\"row\">
        <div id=\"content\" class=\"col-md-9\">";
        // line 50
        echo ($context["content_top"] ?? null);
        echo "
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"well\">
                        <h2>";
        // line 54
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
                        <p><strong>";
        // line 55
        echo ($context["text_register"] ?? null);
        echo "</strong></p>
                        <p>";
        // line 56
        echo ($context["text_register_account"] ?? null);
        echo "</p>
                        <a href=\"";
        // line 57
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"well\">
                        <h2>";
        // line 61
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
                        <p><strong>";
        // line 62
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
                        <form action=\"";
        // line 63
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-email\">";
        // line 65
        echo ($context["entry_email"] ?? null);
        echo "</label>
                                <input type=\"text\" name=\"email\" value=\"";
        // line 66
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"
                                       id=\"input-email\" class=\"form-control\"/>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-password\">";
        // line 70
        echo ($context["entry_password"] ?? null);
        echo "</label>
                                <input type=\"password\" name=\"password\" value=\"";
        // line 71
        echo ($context["password"] ?? null);
        echo "\"
                                       placeholder=\"";
        // line 72
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                                <a href=\"";
        // line 73
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
                            <input type=\"submit\" value=\"";
        // line 74
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\"/>
                            ";
        // line 75
        if (($context["redirect"] ?? null)) {
            // line 76
            echo "                                <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
                            ";
        }
        // line 78
        echo "                        </form>
                    </div>
                </div>
            </div>
            ";
        // line 82
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 83
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 85
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
        return array (  241 => 85,  236 => 83,  232 => 82,  226 => 78,  220 => 76,  218 => 75,  214 => 74,  208 => 73,  204 => 72,  200 => 71,  196 => 70,  187 => 66,  183 => 65,  178 => 63,  174 => 62,  170 => 61,  161 => 57,  157 => 56,  153 => 55,  149 => 54,  142 => 50,  132 => 42,  126 => 40,  124 => 39,  120 => 38,  113 => 34,  109 => 33,  100 => 29,  95 => 27,  90 => 25,  86 => 24,  77 => 20,  72 => 18,  66 => 14,  59 => 10,  56 => 9,  53 => 8,  46 => 4,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
{% if success %}
    <div class=\"alert alert-success alert-dismissible fade show my-3\" role=\"alert\">
        {{ success }}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
{% endif %}
    {% if error_warning %}
        <div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\">
            {{ error_warning }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endif %}
<main class=\"main login-page\">
    <div class=\"container\">

        <div class=\"row login-row\">
            <div class=\"col-6 login-block\">{{ content_top }}
                <div class=\"login-block-register\">
                    <p>{{ text_new_customer }} <a href=\"\" class=\"register\">{{ text_register }}</a></p>
                </div>
                <div class=\"login-block-wrapper\">
                    <div class=\"login-block-title\">
                        <h1>{{ text_returning_customer }}</h1>
                        <p class=\"under-title\">{{ text_i_am_returning_customer }}</p>
                    </div>
                    <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\"
                                   id=\"input-email\" class=\"form-control\">
                        </div>
                        <div class=\"form-group form-group-pass\">
                            <input type=\"password\" name=\"password\" value=\"{{ password }}\"
                                   placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\">
                            <span id=\"icon-eye\" class=\"icon-eye-blocked\"></span>
                            <a href=\"#\" class=\"forgot-pass\">Forgot password?</a>
                        </div>
                        <input type=\"submit\" class=\"btn btn-warning\" value=\"{{ button_login }}\">
                        {% if redirect %}
                            <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\"/>
                        {% endif %}
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<div id=\"account-login\" class=\"container my-3\">
    <div class=\"row\">
        <div id=\"content\" class=\"col-md-9\">{{ content_top }}
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
