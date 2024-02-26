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
class __TwigTemplate_733318a8e714f70edafd65876458e5abef2c5fde0c01f69c984437af607056bc extends \Twig\Template
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
        echo "  <div class=\"row\">
    <div id=\"content\" class=\"";
        // line 9
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 11
        if (($context["products"] ?? null)) {
            // line 12
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <tbody>
          ";
            // line 15
            echo twig_var_dump($this->env, $context, ...[0 => ($context["products"] ?? null)]);
            echo "
          ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 17
                echo "            <tr>
              <td class=\"text-center\">";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                    echo "\" /></a>";
                }
                echo "</td>
              <td class=\"text-left\"><a href=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 19);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                echo "</a></td>
              <td class=\"text-left\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 20);
                echo "</td>
              <td class=\"text-right\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 21);
                echo "</td>
              <td class=\"text-right\">";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                  <div class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 23)) {
                        // line 24
                        echo "                      ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 24);
                        echo "
                    ";
                    } else {
                        // line 25
                        echo " <b>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 25);
                        echo "</b> <s>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 25);
                        echo "</s> ";
                    }
                    echo " </div>
                ";
                }
                // line 26
                echo "</td>
              <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 27);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
                <a href=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 28);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            </tbody>
          
        </table>
      </div>
      ";
        } else {
            // line 36
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 38
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 39
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 41
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 42
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 44
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
        return array (  184 => 44,  179 => 42,  175 => 41,  168 => 39,  165 => 38,  159 => 36,  152 => 31,  141 => 28,  135 => 27,  132 => 26,  122 => 25,  116 => 24,  113 => 23,  111 => 22,  107 => 21,  103 => 20,  97 => 19,  83 => 18,  80 => 17,  76 => 16,  72 => 15,  67 => 12,  65 => 11,  61 => 10,  55 => 9,  52 => 8,  44 => 4,  42 => 3,  37 => 1,);
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
  <div class=\"row\">
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
