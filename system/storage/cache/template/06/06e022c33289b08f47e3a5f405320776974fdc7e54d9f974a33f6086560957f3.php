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

/* coffee/template/account/wishlist.twig */
class __TwigTemplate_1754a3ff364874c6872fc5d2fa94ab14767807b3616b7645bfa2b434e687a0d1 extends \Twig\Template
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
<div id=\"account-wishlist\" class=\"container\">
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
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 23
        if (($context["products"] ?? null)) {
            // line 24
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <tbody>
          ";
            // line 27
            echo twig_var_dump($this->env, $context, ...[0 => ($context["products"] ?? null)]);
            echo "
          ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 29
                echo "          <tr>
            <td class=\"text-center\">";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 30)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 30);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                    echo "\" /></a>";
                }
                echo "</td>
            <td class=\"text-left\"><a href=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 31);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                echo "</a></td>
            <td class=\"text-left\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 32);
                echo "</td>
            <td class=\"text-right\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 33);
                echo "</td>
            <td class=\"text-right\">";
                // line 34
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "              <div class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 35)) {
                        // line 36
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 36);
                        echo "
                ";
                    } else {
                        // line 37
                        echo " <b>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 37);
                        echo "</b> <s>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 37);
                        echo "</s> ";
                    }
                    echo " </div>
              ";
                }
                // line 38
                echo "</td>
            <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 39);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
              <a href=\"";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 40);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </tbody>
          
        </table>
      </div>
      ";
        } else {
            // line 48
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 50
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 51
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 53
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 54
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 56
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 56,  221 => 54,  217 => 53,  210 => 51,  207 => 50,  201 => 48,  194 => 43,  183 => 40,  177 => 39,  174 => 38,  164 => 37,  158 => 36,  155 => 35,  153 => 34,  149 => 33,  145 => 32,  139 => 31,  125 => 30,  122 => 29,  118 => 28,  114 => 27,  109 => 24,  107 => 23,  103 => 22,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  76 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-wishlist\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
    <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  {% if success %}
  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  {% endif %}
  <div class=\"row\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <h2>{{ heading_title }}</h2>
      {% if products %}
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <tbody>
          {{ dump(products) }}
          {% for product in products %}
          <tr>
            <td class=\"text-center\">{% if product.thumb %}<a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" /></a>{% endif %}</td>
            <td class=\"text-left\"><a href=\"{{ product.href }}\">{{ product.name }}</a></td>
            <td class=\"text-left\">{{ product.model }}</td>
            <td class=\"text-right\">{{ product.stock }}</td>
            <td class=\"text-right\">{% if product.price %}
              <div class=\"price\"> {% if not product.special %}
                {{ product.price }}
                {% else %} <b>{{ product.special }}</b> <s>{{ product.price }}</s> {% endif %} </div>
              {% endif %}</td>
            <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('{{ product.product_id }}');\" data-toggle=\"tooltip\" title=\"{{ button_cart }}\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
              <a href=\"{{ product.remove }}\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
          </tr>
          {% endfor %}
            </tbody>
          
        </table>
      </div>
      {% else %}
      <p>{{ text_empty }}</p>
      {% endif %}
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}", "coffee/template/account/wishlist.twig", "");
    }
}
