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
class __TwigTemplate_2be51b82fd0e35bfee61cdb6de4227a8e4b6ada1539614ce7c0fd2d6c43e3168 extends \Twig\Template
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
            <div class=\"col-6 login-block well\">";
        // line 18
        echo ($context["content_top"] ?? null);
        echo "
                <div class=\"login-block-register\">
                    <p>";
        // line 20
        echo ($context["text_new_customer"] ?? null);
        echo " <a href=\"";
        echo ($context["register"] ?? null);
        echo "\" class=\"register\">";
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
                            <a href=\"";
        // line 36
        echo ($context["forgotten"] ?? null);
        echo "\" class=\"forgot-pass\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
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
<div class=\"col-sm-6\">
    <div class=\"well\">
        <h2>";
        // line 50
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
        <p><strong>";
        // line 51
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
        <form action=\"";
        // line 52
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 54
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 55
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 58
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 59
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a href=\"";
        // line 60
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
            <input type=\"submit\" value=\"";
        // line 61
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\" />
            ";
        // line 62
        if (($context["redirect"] ?? null)) {
            // line 63
            echo "                <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
            ";
        }
        // line 65
        echo "        </form>
    </div>
</div>
";
        // line 68
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
        return array (  207 => 68,  202 => 65,  196 => 63,  194 => 62,  190 => 61,  184 => 60,  178 => 59,  174 => 58,  166 => 55,  162 => 54,  157 => 52,  153 => 51,  149 => 50,  139 => 42,  133 => 40,  131 => 39,  127 => 38,  120 => 36,  115 => 34,  111 => 33,  102 => 29,  97 => 27,  92 => 25,  88 => 24,  77 => 20,  72 => 18,  66 => 14,  59 => 10,  56 => 9,  53 => 8,  46 => 4,  43 => 3,  41 => 2,  37 => 1,);
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
            <div class=\"col-6 login-block well\">{{ content_top }}
                <div class=\"login-block-register\">
                    <p>{{ text_new_customer }} <a href=\"{{ register }}\" class=\"register\">{{ text_register }}</a></p>
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
                            <a href=\"{{ forgotten }}\" class=\"forgot-pass\">{{ text_forgotten }}</a>
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
<div class=\"col-sm-6\">
    <div class=\"well\">
        <h2>{{ text_returning_customer }}</h2>
        <p><strong>{{ text_i_am_returning_customer }}</strong></p>
        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">{{ entry_email }}</label>
                <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">{{ entry_password }}</label>
                <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" />
                <a href=\"{{ forgotten }}\">{{ text_forgotten }}</a></div>
            <input type=\"submit\" value=\"{{ button_login }}\" class=\"btn btn-primary\" />
            {% if redirect %}
                <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\" />
            {% endif %}
        </form>
    </div>
</div>
{{ footer }}", "coffee/template/account/login.twig", "");
    }
}
