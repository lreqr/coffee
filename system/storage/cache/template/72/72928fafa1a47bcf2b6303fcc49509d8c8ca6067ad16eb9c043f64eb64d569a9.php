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
class __TwigTemplate_46604e07330bbce751ec6f83e3243ae9ef3c62d3ab57cd5650b97e26377a6580 extends \Twig\Template
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
  ";
        // line 3
        if (($context["success"] ?? null)) {
            // line 4
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 8
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 18
        if (($context["products"] ?? null)) {
            // line 19
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <tbody>
          ";
            // line 22
            echo twig_var_dump($this->env, $context, ...[0 => ($context["products"] ?? null)]);
            echo "
          ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 24
                echo "          <tr>
            <td class=\"text-center\">";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 25)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 25);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                    echo "\" /></a>";
                }
                echo "</td>
            <td class=\"text-left\"><a href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "</a></td>
            <td class=\"text-left\">";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 27);
                echo "</td>
            <td class=\"text-right\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 28);
                echo "</td>
            <td class=\"text-right\">";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "              <div class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 30)) {
                        // line 31
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 31);
                        echo "
                ";
                    } else {
                        // line 32
                        echo " <b>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 32);
                        echo "</b> <s>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32);
                        echo "</s> ";
                    }
                    echo " </div>
              ";
                }
                // line 33
                echo "</td>
            <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 34);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
              <a href=\"";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 35);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            </tbody>
          
        </table>
      </div>
      ";
        } else {
            // line 43
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 45
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 46
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 48
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 49
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 51
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
        return array (  207 => 51,  202 => 49,  198 => 48,  191 => 46,  188 => 45,  182 => 43,  175 => 38,  164 => 35,  158 => 34,  155 => 33,  145 => 32,  139 => 31,  136 => 30,  134 => 29,  130 => 28,  126 => 27,  120 => 26,  106 => 25,  103 => 24,  99 => 23,  95 => 22,  90 => 19,  88 => 18,  84 => 17,  77 => 16,  74 => 15,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  57 => 9,  52 => 8,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-wishlist\" class=\"container\">
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
