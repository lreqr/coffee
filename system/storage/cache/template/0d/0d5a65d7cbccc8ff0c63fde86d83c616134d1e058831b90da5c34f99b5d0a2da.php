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
class __TwigTemplate_98ea62e4ba7cfbbf5d8aa660818d8140bdb3df3e25b3aaf1efef59c130b0c05c extends \Twig\Template
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
<div id=\"account-account\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">
    <div id=\"content\" class=\"";
        // line 12
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 13
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 15
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 16
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 17
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 18
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 20
        if (($context["credit_cards"] ?? null)) {
            // line 21
            echo "      <h2>";
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
      <ul class=\"list-unstyled\">
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 24
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 24);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 24);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "      </ul>
      ";
        }
        // line 28
        echo "      <h2>";
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 30
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 31
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
        ";
        // line 32
        if (($context["reward"] ?? null)) {
            // line 33
            echo "        <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
        ";
        }
        // line 35
        echo "        <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 36
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 37
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
      </ul>
      <h2>";
        // line 39
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        ";
        // line 41
        if ( !($context["tracking"] ?? null)) {
            // line 42
            echo "        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
        ";
        } else {
            // line 44
            echo "        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
        <li><a href=\"";
            // line 45
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
        ";
        }
        // line 47
        echo "      </ul>
      <h2>";
        // line 48
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 50
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 52
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 53
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 55
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
        return array (  236 => 55,  231 => 53,  227 => 52,  220 => 50,  215 => 48,  212 => 47,  205 => 45,  198 => 44,  190 => 42,  188 => 41,  183 => 39,  176 => 37,  170 => 36,  163 => 35,  155 => 33,  153 => 32,  147 => 31,  141 => 30,  135 => 28,  131 => 26,  120 => 24,  116 => 23,  110 => 21,  108 => 20,  101 => 18,  95 => 17,  89 => 16,  83 => 15,  78 => 13,  72 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-account\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
    <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  {% if success %}
  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}</div>
  {% endif %}
  <div class=\"row\">
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <h2>{{ text_my_account }}</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"{{ edit }}\">{{ text_edit }}</a></li>
        <li><a href=\"{{ password }}\">{{ text_password }}</a></li>
        <li><a href=\"{{ address }}\">{{ text_address }}</a></li>
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
        <li><a href=\"{{ download }}\">{{ text_download }}</a></li>
        {% if reward %}
        <li><a href=\"{{ reward }}\">{{ text_reward }}</a></li>
        {% endif %}
        <li><a href=\"{{ return }}\">{{ text_return }}</a></li>
        <li><a href=\"{{ transaction }}\">{{ text_transaction }}</a></li>
        <li><a href=\"{{ recurring }}\">{{ text_recurring }}</a></li>
      </ul>
      <h2>{{ text_my_affiliate }}</h2>
      <ul class=\"list-unstyled\">
        {% if not tracking %}
        <li><a href=\"{{ affiliate }}\">{{ text_affiliate_add }}</a></li>
        {% else %}
        <li><a href=\"{{ affiliate }}\">{{ text_affiliate_edit }}</a></li>
        <li><a href=\"{{ tracking }}\">{{ text_tracking }}</a></li>
        {% endif %}
      </ul>
      <h2>{{ text_my_newsletter }}</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"{{ newsletter }}\">{{ text_newsletter }}</a></li>
      </ul>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}", "coffee/template/account/account.twig", "");
    }
}
