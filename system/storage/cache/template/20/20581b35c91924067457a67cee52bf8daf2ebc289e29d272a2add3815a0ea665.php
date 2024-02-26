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
class __TwigTemplate_da90397b1a4ff156d455a5e6d63bcc3c307ed71db778774c1addfdad2b64b4c5 extends \Twig\Template
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
<main class=\"main login-page\">
    <div class=\"container\">
        ";
        // line 4
        if (($context["success"] ?? null)) {
            // line 5
            echo "            <div class=\"alert alert-success alert-dismissible fade show my-3\" role=\"alert\">
                ";
            // line 6
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        // line 10
        echo "        ";
        if (($context["error_warning"] ?? null)) {
            // line 11
            echo "            <div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\">
                ";
            // line 12
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        // line 16
        echo "        <div class=\"row login-row\">
            <div class=\"col-6 login-block\">
                <div class=\"login-block-register\">
                    <p>Not a member? <a href=\"\" class=\"register\">Register now</a></p>
                </div>
                <div class=\"login-block-wrapper\">
                    <div class=\"login-block-title\">
                        <h1>Hello again!</h1>
                        <p class=\"under-title\">Welcome back you`re been missed!</p>
                    </div>
                    <form action=\"#\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Username\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
                        </div>
                        <div class=\"form-group form-group-pass\">
                            <input id=\"input-password\" type=\"password\" class=\"form-control input-pass\" placeholder=\"Recipient's username\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                            <span id=\"icon-eye\" class=\"icon-eye-blocked\"></span>
                            <a href=\"#\" class=\"forgot-pass\">Forgot password?</a>
                        </div>
                        <input type=\"submit\" class=\"btn btn-warning\" value=\"Sign in\">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<div id=\"account-login\" class=\"container my-3\">
    <div class=\"row\">
        <div id=\"content\" class=\"col-md-9\">";
        // line 44
        echo ($context["content_top"] ?? null);
        echo "
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"well\">
                        <h2>";
        // line 48
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
                        <p><strong>";
        // line 49
        echo ($context["text_register"] ?? null);
        echo "</strong></p>
                        <p>";
        // line 50
        echo ($context["text_register_account"] ?? null);
        echo "</p>
                        <a href=\"";
        // line 51
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"well\">
                        <h2>";
        // line 55
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
                        <p><strong>";
        // line 56
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
                        <form action=\"";
        // line 57
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-email\">";
        // line 59
        echo ($context["entry_email"] ?? null);
        echo "</label>
                                <input type=\"text\" name=\"email\" value=\"";
        // line 60
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"
                                       id=\"input-email\" class=\"form-control\"/>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-password\">";
        // line 64
        echo ($context["entry_password"] ?? null);
        echo "</label>
                                <input type=\"password\" name=\"password\" value=\"";
        // line 65
        echo ($context["password"] ?? null);
        echo "\"
                                       placeholder=\"";
        // line 66
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                                <a href=\"";
        // line 67
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
                            <input type=\"submit\" value=\"";
        // line 68
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\"/>
                            ";
        // line 69
        if (($context["redirect"] ?? null)) {
            // line 70
            echo "                                <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
                            ";
        }
        // line 72
        echo "                        </form>
                    </div>
                </div>
            </div>
            ";
        // line 76
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 77
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 79
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
        return array (  197 => 79,  192 => 77,  188 => 76,  182 => 72,  176 => 70,  174 => 69,  170 => 68,  164 => 67,  160 => 66,  156 => 65,  152 => 64,  143 => 60,  139 => 59,  134 => 57,  130 => 56,  126 => 55,  117 => 51,  113 => 50,  109 => 49,  105 => 48,  98 => 44,  68 => 16,  61 => 12,  58 => 11,  55 => 10,  48 => 6,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main login-page\">
    <div class=\"container\">
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
        <div class=\"row login-row\">
            <div class=\"col-6 login-block\">
                <div class=\"login-block-register\">
                    <p>Not a member? <a href=\"\" class=\"register\">Register now</a></p>
                </div>
                <div class=\"login-block-wrapper\">
                    <div class=\"login-block-title\">
                        <h1>Hello again!</h1>
                        <p class=\"under-title\">Welcome back you`re been missed!</p>
                    </div>
                    <form action=\"#\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Username\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
                        </div>
                        <div class=\"form-group form-group-pass\">
                            <input id=\"input-password\" type=\"password\" class=\"form-control input-pass\" placeholder=\"Recipient's username\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                            <span id=\"icon-eye\" class=\"icon-eye-blocked\"></span>
                            <a href=\"#\" class=\"forgot-pass\">Forgot password?</a>
                        </div>
                        <input type=\"submit\" class=\"btn btn-warning\" value=\"Sign in\">
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
