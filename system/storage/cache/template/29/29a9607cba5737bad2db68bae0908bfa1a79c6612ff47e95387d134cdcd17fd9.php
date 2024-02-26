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

/* coffee/template/account/account.twig */
class __TwigTemplate_9bbd0c0659d71c5deb0e68cc05cbb1c268a867fd79c003f4260b145948397fd9 extends \Twig\Template
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
<main class=\"main account-page\">
    <div id=\"account-account\" class=\"container\">
        ";
        // line 4
        if (($context["success"] ?? null)) {
            // line 5
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
        ";
        }
        // line 7
        echo "        <div class=\"row\">
            <div id=\"content\" class=\"";
        // line 8
        echo ($context["class"] ?? null);
        echo "\">
                <h1>";
        // line 9
        echo ($context["text_my_account"] ?? null);
        echo "</h1>
                <ul class=\"list-unstyled mb-0\">
                    <li><span class=\"icon-edit-account\"></span><a href=\"";
        // line 11
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
                    <li><span class=\"icon-password\"></span><a href=\"";
        // line 12
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
                    <li><span class=\"icon-cart\"></span><a href=\"";
        // line 13
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
                    <li><span class=\"icon-delivery\"></span><a href=\"";
        // line 14
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
                </ul>
            </div>
        </div>
    </div>
</main>
";
        // line 20
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 20,  81 => 14,  75 => 13,  69 => 12,  63 => 11,  58 => 9,  54 => 8,  51 => 7,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main account-page\">
    <div id=\"account-account\" class=\"container\">
        {% if success %}
            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}</div>
        {% endif %}
        <div class=\"row\">
            <div id=\"content\" class=\"{{ class }}\">
                <h1>{{ text_my_account }}</h1>
                <ul class=\"list-unstyled mb-0\">
                    <li><span class=\"icon-edit-account\"></span><a href=\"{{ edit }}\">{{ text_edit }}</a></li>
                    <li><span class=\"icon-password\"></span><a href=\"{{ password }}\">{{ text_password }}</a></li>
                    <li><span class=\"icon-cart\"></span><a href=\"{{ wishlist }}\">{{ text_wishlist }}</a></li>
                    <li><span class=\"icon-delivery\"></span><a href=\"{{ order }}\">{{ text_order }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</main>
{{ footer }}", "coffee/template/account/account.twig", "");
    }
}
