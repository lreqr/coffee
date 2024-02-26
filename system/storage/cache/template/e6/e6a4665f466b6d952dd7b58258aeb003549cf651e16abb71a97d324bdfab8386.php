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

/* coffee/template/extension/module/account.twig */
class __TwigTemplate_b437bdf71ee356136524071dc3575f7447197c863a9696456742eb154e8b30ce extends \Twig\Template
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
        echo "<div class=\"list-group\">
  ";
        // line 2
        if ( !($context["logged"] ?? null)) {
            // line 3
            echo "  <a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a>
  ";
        }
        // line 5
        echo "  <a href=\"";
        echo ($context["account"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
  ";
        // line 6
        if (($context["logged"] ?? null)) {
            // line 7
            echo "  <a href=\"";
            echo ($context["edit"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_edit"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["password"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
  ";
        }
        // line 9
        echo "  <a href=\"";
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["order"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_order"] ?? null);
        echo "</a>
  ";
        // line 10
        if (($context["logged"] ?? null)) {
            // line 11
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
  ";
        }
        // line 13
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "coffee/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 13,  92 => 11,  90 => 10,  79 => 9,  67 => 7,  65 => 6,  58 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"list-group\">
  {% if not logged %}
  <a href=\"{{ login }}\" class=\"list-group-item\">{{ text_login }}</a> <a href=\"{{ register }}\" class=\"list-group-item\">{{ text_register }}</a> <a href=\"{{ forgotten }}\" class=\"list-group-item\">{{ text_forgotten }}</a>
  {% endif %}
  <a href=\"{{ account }}\" class=\"list-group-item\">{{ text_account }}</a>
  {% if logged %}
  <a href=\"{{ edit }}\" class=\"list-group-item\">{{ text_edit }}</a> <a href=\"{{ password }}\" class=\"list-group-item\">{{ text_password }}</a>
  {% endif %}
  <a href=\"{{ wishlist }}\" class=\"list-group-item\">{{ text_wishlist }}</a> <a href=\"{{ order }}\" class=\"list-group-item\">{{ text_order }}</a>
  {% if logged %}
  <a href=\"{{ logout }}\" class=\"list-group-item\">{{ text_logout }}</a>
  {% endif %}
</div>
", "coffee/template/extension/module/account.twig", "");
    }
}
