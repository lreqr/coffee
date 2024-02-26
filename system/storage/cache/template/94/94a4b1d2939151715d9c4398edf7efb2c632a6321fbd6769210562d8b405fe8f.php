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
class __TwigTemplate_3d45805f11a4a6b7f404a1ab5310318b7bc4a8d85f9578695cf6bcc47cba3e16 extends \Twig\Template
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
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
";
        }
        // line 5
        echo "<div id=\"account-account\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"";
        // line 7
        echo ($context["class"] ?? null);
        echo "\">
      <h2>";
        // line 8
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 10
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 11
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 12
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 14
        if (($context["credit_cards"] ?? null)) {
            // line 15
            echo "      <h2>";
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
      <ul class=\"list-unstyled\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 18
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 18);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 18);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      </ul>
      ";
        }
        // line 22
        echo "      <h2>";
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 24
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 26
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 27
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 29
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
        return array (  130 => 29,  125 => 27,  121 => 26,  114 => 24,  108 => 22,  104 => 20,  93 => 18,  89 => 17,  83 => 15,  81 => 14,  74 => 12,  68 => 11,  62 => 10,  57 => 8,  53 => 7,  49 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
{% if success %}
  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}</div>
{% endif %}
<div id=\"account-account\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"{{ class }}\">
      <h2>{{ text_my_account }}</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"{{ edit }}\">{{ text_edit }}</a></li>
        <li><a href=\"{{ password }}\">{{ text_password }}</a></li>
        <li><a href=\"{{ wishlist }}\">{{ text_wishlist }}</a></li>
      </ul>
      {% if credit_cards %}
      <h2>{{ text_credit_card }}</h2>
      <ul class=\"list-unstyled\">
        {% for credit_card in credit_cards %}
        <li><a href=\"{{ credit_card.href }}\">{{ credit_card.name }}</a></li>
        {% endfor %}
      </ul>
      {% endif %}
      <h2>{{ text_my_orders }}</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"{{ order }}\">{{ text_order }}</a></li>
      </ul>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}", "coffee/template/account/account.twig", "");
    }
}
